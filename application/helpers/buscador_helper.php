<?php

function busqueda($diainici,$diafin,$adultos,$ninos){
    $authRes = getAuthKey();    
    $accessKey = $authRes['accessKey'];
    $accessSecret = $authRes['accessSecret']; 
    return search($accessKey, $accessSecret,$diainici,$diafin,$adultos,$ninos);
}

function getAuthKey()
{
    if(!isset($_SESSION['accessKey'])
        && !isset($_SESSION['accessSecret']))
    {
        $consumerKey = 'CC8526ABACE39B547DB5DD3F046BA48F223AC3FA'; 
        $consumerSecret = '86EC2AF174D2D70D3E8F5DAED93BB6C6E36338C1';

        $json=array("hotelogix"=>array("version"=>"1.0","datetime"=>gmdate("Y-m-d\TH:i:s"),"request"=>array(
                "method"=>"wsauth","key"=>$consumerKey
        )));
        /*$xml ='<?xml version="1.0" encoding="UTF-8"?>        
                   <request method="wsauth" key="'.$consumerKey.'"></request>';*/

        //$xml = prepareRequestXML($xml);
        $resXmlDom = postCurl('wsauth',json_encode($json),$consumerSecret, TRUE);
        $resXmlDom=json_decode($resXmlDom);


        $itemAk = $resXmlDom->hotelogix->response->accesskey;
        $itemAs = $resXmlDom->hotelogix->response->accesssecret;
        
        $_SESSION['accessKey'] = $itemAk;
        $_SESSION['accessSecret'] = $itemAs;
    }
    else
    {
        $itemAk = $_SESSION['accessKey']; 
        $itemAs = $_SESSION['accessSecret'];
    }

    return array(
        'accessKey' => (string)$itemAk,
        'accessSecret' =>(string)$itemAs
    );
}
function search($consumerKey, $consumerSecret,$diainici,$diafin,$adultos,$ninos)
{
   $json=["hotelogix"=>["version"=>"1.0","datetime"=>gmdate("Y-m-d\TH:i:s"),"request"=>["method"=>"search","key"=>$consumerKey,"languagecode"=>"en","data"=>["stay"=>["checkindate"=>$diainici,"checkoutdate"=>$diafin],"pax"=>["adult"=>$adultos,"child"=>$ninos,"infant"=>0],"hotels"=>[["id"=>"41711"]],"roomrequire"=>1,"limit"=>["value"=>20,"offset"=>0]]]]];
   
    $resXmlDom = postCurl('search', json_encode($json), $consumerSecret, TRUE);
    return json_decode($resXmlDom);

}
function deleteroom_h($item){
    $authRes = getAuthKey();      
    $accessKey = $authRes['accessKey'];
    $accessSecret = $authRes['accessSecret']; 
    $json=["hotelogix"=>["version"=>"1.0","datetime"=>gmdate("Y-m-d\TH:i:s"),"request"=>["method"=>"deletefromcart","key"=>$accessKey,"languagecode"=>"en","data"=>["itemId"=>["value"=>$item]]]]]; 
    
    $resXmlDom = postCurl('deletefromcart', json_encode($json), $accessSecret, TRUE);
    return json_decode($resXmlDom);
}
//funcion para vaciar el carrito
function clearallcart(){
    $authRes = getAuthKey();    
    $accessKey = $authRes['accessKey'];
    $accessSecret = $authRes['accessSecret']; 
    $json=["hotelogix"=>["version"=>"1.0","datetime"=>gmdate("Y-m-d\TH:i:s"),"request"=>["method"=>"clearcart","key"=>$accessKey,"languagecode"=>"en"]]];
    $resXmlDom = postCurl('clearcart', json_encode($json), $accessSecret, TRUE);
    return json_decode($resXmlDom);
}
//funcion para mostrar el carrito
function loadcart_item(){

    $authRes = getAuthKey();    
    $accessKey = $authRes['accessKey'];
    $accessSecret = $authRes['accessSecret']; 
    $json=["hotelogix"=>["version"=>"1.0","datetime"=>gmdate("Y-m-d\TH:i:s"),"request"=>["method"=>"loadcart","key"=>$accessKey,"languagecode"=>"en"]]];
    $resXmlDom = postCurl('loadcart', json_encode($json), $accessSecret, TRUE);
    return json_decode($resXmlDom);
}

//funcion para agregar al carrito
function addcar_item($item){
    
    $authRes = getAuthKey();
    $accessKey = $authRes['accessKey'];
    $accessSecret = $authRes['accessSecret']; 
    $json=["hotelogix"=>["version"=>"1.0","datetime"=>gmdate("Y-m-d\TH:i:s"),"request"=>["method"=>"addtocart","key"=>$accessKey,"languagecode"=>"en","data"=>["itemid"=>["value"=>$item]]]]];
    error_log("shashi === 222 ".json_encode($json));
    $resXmlDom = postCurl('addtocart', json_encode($json), $accessSecret, TRUE);
    return json_decode($resXmlDom);

}
//funcion para guaradar una reservacion 
function savebooking($name,$lastname,$email,$phone,$movil,$contry,$state,$address,$city,$zip,$preference){
    $authRes = getAuthKey();
    $accessKey = $authRes['accessKey'];
    $accessSecret = $authRes['accessSecret']; 
    $carrito=loadcart_item();
    //vdebug($carrito);
    $id_hotels=$carrito->hotelogix->response->hotels[0]->id;
    $id_bookings=$carrito->hotelogix->response->hotels[0]->bookings[0]->id;
    $id_gueststays=$carrito->hotelogix->response->hotels[0]->bookings[0]->gueststays[0]->id;
    //$id_infantstays=$carrito->hotelogix->response->hotels[0]->bookings[0]->gueststays[0]->id;
    $json=["hotelogix"=>["version"=>"1.0","datetime"=>gmdate("Y-m-d\TH:i:s"),"request"=>["method"=>"savebooking","key"=>$accessKey,"languagecode"=>"en","data"=>["guest"=>["fname"=>["value"=>$name],"lname"=>["value"=>$lastname],"email"=>["value"=>$email],"phone"=>["value"=>$phone],"mobile"=>["value"=>$movil],"country"=>["value"=>$contry],"state"=>["value"=>$state],"address"=>["value"=>$address],"city"=>["value"=>$city],"zip"=>["value"=>$zip],"isGroupBooking"=>["value"=>'false'],"hotels"=>["id"=>$id_hotels,"preference"=>["value"=>$preference],"bookings"=>["booking"=>["id"=>$id_bookings,"gueststays"=>["id"=>$id_gueststays,"guest"=>["guest"=>["fname"=>["value"=>$name],"lname"=>["value"=>$lastname],"email"=>["value"=>$email],"phone"=>["value"=>$phone],"mobile"=>["value"=>$movil],"country"=>["value"=>$contry],"state"=>["value"=>$state],"city"=>["value"=>$city],"zip"=>["value"=>$zip]]]]]]]]]]]];  
    $resXmlDom = postCurl('savebooking', json_encode($json), $accessSecret, TRUE);
     return json_decode($resXmlDom);
}
//funcion para agregar un metodo de pago
 function  addcard($name,$amount,$numcard,$tipocard,$cvv,$mes,$year,$orderId){
    $authRes = getAuthKey();
    $accessKey = $authRes['accessKey'];
    $accessSecret = $authRes['accessSecret']; 
    $json=["hotelogix"=>["version"=>"1.0","datetime"=>gmdate("Y-m-d\TH:i:s"),"request"=>["method"=>"confirmbooking","key"=>$accessKey,"languagecode"=>"en","data"=>["payment"=>["amount"=>$amount,"isguestcc"=>"0","type"=>"CC","payType"=>"agent", "description"=>"Reservación Hotel Márquez Del Ángel"],"creditcard"=>["nameoncard"=>$name,"cardno"=>$numcard,"cardtype"=>$tipocard,"cvc"=>$cvv,"expirymonth"=>$mes,"expiryyear"=>$year],"orderId"=>["value"=>$orderId],"ignoreSourceError"=>["value"=>true],"errorIfNotConfirm"=>["value"=>1]]]]];
    $resXmlDom = postCurl('confirmbooking', json_encode($json), $accessSecret, TRUE);
     return json_decode($resXmlDom);
}


function postCurl($method, $data, $secret, $isJson = TRUE)
{           
    $url = 'https://crs.staygrid.com/ws/web/'.$method;
    $signature = hash_hmac("sha1",$data,$secret);
    
    if($isJson)
    {
        $extHeader = array(
                   "Content-Type: application/json"
                   ,"X-HAPI-Signature: $signature"
        );
    }
    else
    {
        $extHeader = array(
                   "Content-Type: text/xml"
                   ,"X-HAPI-Signature: $signature"
        );
    }

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_HTTPHEADER,$extHeader);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_REFERER, 'http://www.hotelogix.com');
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
    $result = curl_exec($ch);
    curl_close($ch); 
 
    return $result;
}
function prepareRequestXML($xml)
{
    $dom  = new DOMDocument();
    $dom->formatOutput = TRUE;
    $hotelogixNode = $dom->createElement("hotelogix");
    $hotelogixNode->setAttribute("version",'1.0');
    $hotelogixNode->setAttribute("datetime",gmdate("Y-m-d\TH:i:s"));      
    $dom->appendChild($hotelogixNode);
    
    $dom1  = new DOMDocument();
    if(!$dom1->loadXML($xml))
    {  

        throw new Exception("no es valido el dato!!");
    }

    $item = $dom1->getElementsByTagName('request')->item(0);

    $reqN = $dom->importNode($item,TRUE);

    $hotelogixNode->appendChild($reqN);
    return $dom->saveXML();


}