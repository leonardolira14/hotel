<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("Model_Menu");
		$this->load->model("Model_General");
		$this->load->helper('date');
		

	}
	public function busquedareturn($idioma="es"){
		date_default_timezone_set('America/Mexico_City');
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		//vdebug($idioma);
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["title"]="Hotel Marqués del Ángel";
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$this->load->view('master',$data);
		
		$datos=$this->session->userdata();
		$checkin=$datos["checkin"];
		$checkout=$datos["checkout"];
		$adultos=$datos["adultos"];
		$ninos=$datos["ninos"];
		
		$resultados=busqueda($checkin,$checkout,$adultos,$ninos);
		
		if($resultados->hotelogix->response->hotels[0]->status->code==1408){
			$data["pass"]=0;
			$data["error"]="Error de fechas";
			$this->load->view('recervacion',$data);
		}else{
			$_data["resultados"]=$resultados;
			$_data["idioma"]=$idioma;
			$_data["checkin"]=$checkin;
			$_data["checkout"]=$checkout;
			$datacheck=array("checkin"=>$checkin,"checkout"=>$checkout);
			$this->load->view('resultados',$_data);		
		}
		
		$this->load->view('footer',$data);	
	}
	public function busqueda_habitacion($idioma="es"){
		date_default_timezone_set('America/Mexico_City');
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["title"]="Hotel Marqués del Ángel";
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$_data["texthome"]=$this->Model_Menu->Gettexthome($idioma);
		$_data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$this->load->view('master',$data);
		$config=array( array(
					'field'=>'checkin', 
					'label'=>'Fecha de Entrada', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'checkout', 
					'label'=>'Fecha de Salida', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'adultos', 
					'label'=>'No de Adultos', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'ninos', 
					'label'=>'No de Niños', 
					'rules'=>'trim|required|xss_clean'					
				)
			
		);
		$this->form_validation->set_rules($config);
		$array=array("required"=>'El campo %s es obligatorio',"valid_email"=>'El campo %s no es valido',"min_length[3]"=>'El campo %s debe ser mayor a 3 Digitos',"min_length[10]"=>'El campo %s debe ser mayor a 10 Digitos','alpha'=>'El campo %s debe estar compuesto solo por letras',"matches"=>"Las contraseñas no coinciden",'is_unique'=>'El contenido del campo %s ya esta registrado');
		$this->form_validation->set_message($array);
		if($this->form_validation->run() !=false){
			$checkin=$this->input->post("checkin");
			$checkout=$this->input->post("checkout");
			$ninos=$this->input->post("ninos");
			$adultos=$this->input->post("adultos");
			$dedonde=$this->input->post("dedonde");
			$resultados=busqueda($checkin,$checkout,$adultos,$ninos);
			//vdebug($resultados->hotelogix->response->hotels[0]->status);
			$code=$resultados->hotelogix->response->hotels[0]->status->code;
			$message=$resultados->hotelogix->response->hotels[0]->status->message;
			if($code===1400){
				$_data["resultados"]=$resultados;
				$_data["idioma"]=$idioma;
				$_data["checkin"]=$checkin;
				$_data["checkout"]=$checkout;
				$datacheck=array("adultos"=>$adultos,"ninos"=>$ninos,"checkin"=>$checkin,"checkout"=>$checkout);
				$this->session->set_userdata($datacheck);
				$this->load->view('resultados',$_data);
			}
			if($code===1401){
				$_data["pass"]=0;
				if($idioma==="ES"){	
					$_data["error"]="Para recervar almenos tiene que ser una noche";
					$this->load->view($dedonde,$_data);	
				}else{
					$_data["error"]=$message;
					$this->load->view($dedonde,$_data);	
				}
			}
			
		}else{
			$_data["pass"]=0;
			$_data["error"]=validation_errors();
			$this->load->view('home',$_data);
		}
		
		$this->load->view('footer',$data);
		
	}
	public function index($idioma="ES")
	{
		
    
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["title"]="Hotel Marqués del Ángel";
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$_data["texthome"]=$this->Model_Menu->Gettexthome($idioma);
		$_data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$this->load->view('master',$data);
		$this->load->view('home',$_data);
		$this->load->view('listhabitacion',$_data["listarooms"]);
		$this->load->view('footer',$data);
	}
	public function suites($idioma)
	{
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$_data["textsuitep"]=$this->Model_Menu->gettextsuitsp($idioma);
		$_data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Suites";
		$this->load->view('master',$data);
		$this->load->view('suites',$_data);
		$this->load->view('listhabitacion',$_data);
		$this->load->view('footer',$data);
	}
	public function clasica($idioma){
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["textsuite"]=$this->Model_Menu->gettextclassic($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Habitación Clasica  ";
		$this->load->view('master',$data);
		$this->load->view('clasica',$data);
		$this->load->view('listhabitacion',$data);
		$this->load->view('footer',$data);
	}
	public function junior($idioma){
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Junior Suite";
		$this->load->view('master',$data);
		$this->load->view('junior',$data);
		$this->load->view('listhabitacion',$data);
		$this->load->view('footer',$data);
	}
	public function familiar($idioma){
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Suite Familiar";
		$this->load->view('master',$data);
		$this->load->view('familiar',$data);
		$this->load->view('listhabitacion',$data);
		$this->load->view('footer',$data);
	}
	public function imperial($idioma){
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Suite Imperial";
		$this->load->view('master',$data);
		$this->load->view('imperial',$data);
		$this->load->view('listhabitacion',$data);
		$this->load->view('footer',$data);
	}
	public function marques($idioma){
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Suite Precidencial";
		$this->load->view('master',$data);
		$this->load->view('marques',$data);
		$this->load->view('listhabitacion',$data);
		$this->load->view('footer',$data);
	}
	public function servicios($idioma){
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Servicios";
		$this->load->view('master',$data);
		$this->load->view('servicios',$data);
		$this->load->view('footer',$data);
	}
	public function restaurante($idioma){
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Restaurant";
		$this->load->view('master',$data);
		$this->load->view('restaurant',$data);
		$this->load->view('footer',$data);
	}
	public function mezcaleria($idioma){
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Mezcaleria & Cava del Marqués";
		$this->load->view('master',$data);
		$this->load->view('mescaleria',$data);
		$this->load->view('footer',$data);
	}
	public function eventos($idioma){
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Eventos & Meetings";
		$this->load->view('master',$data);
		$this->load->view('eventos',$data);
		$this->load->view('footer',$data);
	}
	public function cotizador($idioma){
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Cotizador";
		$this->load->view('master',$data);
		$this->load->view('cotizador',$data);
		$this->load->view('footer',$data);
	}
	public function newreservacion($idioma){
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Recervaciones";
		$respuesta=clearallcart();
		$this->load->view('master',$data);
		$this->load->view('recervacion',$data);
		$this->load->view('footer',$data);
	}
	public function reservacion($idioma){
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Recervaciones";
		$this->load->view('master',$data);
		$this->load->view('recervacion',$data);
		$this->load->view('footer',$data);
	}
	public function experiencias($idioma){
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Experiencias y Promociones";
		$this->load->view('master',$data);
		$this->load->view('experiencias',$data);
		$this->load->view('footer',$data);
	}
	public function contacto($idioma){
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Contacto";
		$this->load->view('master',$data);
		$this->load->view('contacto',$data);
		$this->load->view('footer',$data);
	}
	public function detallesreserva($idioma)
	{
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Contacto";
		$_data["idioma"]=$idioma;
		$_datav["idioma"]=$idioma;
		$_datav["cart"]=loadcart_item();
		$_datav["checkin"]=$this->session->userdata("checkin");
		$_datav["checkout"]=$this->session->userdata("checkout");
		$this->load->view('master',$data);
		$this->load->view('detalles_reserva',$_datav);
		$this->load->view('footer',$data);

	}
	//funcion para agregar la habitacion al carrito
	public function addcar(){
		$datos=json_decode($_POST["datos"]);
		//vdebug($datos);
		$respuesta=addcar_item($datos);
		//vdebug($respuesta);
		if($respuesta->hotelogix->response->status->code===1500){
			$data["pass"]=1;
			$data["mensaje"]="Habitación agregada correctamente";
		}else{
			$data["pass"]=0;
			$data["mensaje"]=$respuesta->hotelogix->response->status->message;
		}
		echo json_encode($data);
	}
	//funcion para eliminar una habitacion del carrito
	public function deleteroom(){
		$datos=json_decode($_POST["datos"]);
		$respuesta=deleteroom_h($datos);
		if($respuesta->hotelogix->response->status->code===1502){
			$data["pass"]=1;
			$data["mensaje"]="Habitación eliminada correctamente";
		}else{
			$data["pass"]=0;
			$data["mensaje"]=$respuesta->hotelogix->response->status->message;
		}
		echo json_encode($data);
	}
	public function confirmar_reserva($idioma){
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Confirmar Reservación";
		$_data["idioma"]=$idioma;
		$_datav["idioma"]=$idioma;
		$_datav["cart"]=loadcart_item();
		$_datav["checkin"]=$this->session->userdata("checkin");
		$_datav["checkout"]=$this->session->userdata("checkout");
		$_datav["paises"]=$this->Model_General->pais();
		$_datav["estados"]=$this->Model_General->estados("42");
		$this->load->view('master',$data);
		$this->load->view('confirmar_reservacion',$_datav);
		$this->load->view('footer',$data);
	}
	//para confirmar con targerta de credito
	public function add_recervacion($idioma){
		//vdebug($_POST);
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$_datav["idioma"]=$idioma;
		$_datav["cart"]=loadcart_item();
		$_datav["checkin"]=$this->session->userdata("checkin");
		$_datav["checkout"]=$this->session->userdata("checkout");
		$data["title"]="Hotel Marqués del Ángel | Confirmar Reservación";
		$this->load->view('master',$data);
		$config=array( array(
					'field'=>'titulo', 
					'label'=>'Titulo', 
					'rules'=>'trim|xss_clean'					
				),
			array(
					'field'=>'nombre', 
					'label'=>'Nombre', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'apellidos', 
					'label'=>'Apellidos', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'telefono', 
					'label'=>'Teléfono', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'movil', 
					'label'=>'Móvil', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'correo', 
					'label'=>'Correo Electrónico', 
					'rules'=>'trim|required|xss_clean|valid_email'					
				),
			array(
					'field'=>'correo2', 
					'label'=>'Confirmar Correo Electrónico', 
					'rules'=>'trim|required|xss_clean|valid_email'					
				),
			array(
					'field'=>'pais', 
					'label'=>'Pais', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'estado', 
					'label'=>'Estado', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'ciudad', 
					'label'=>'Ciudad', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'cp', 
					'label'=>'Código Postal', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'acepto', 
					'label'=>'Términos y Condiciones', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'tipotj', 
					'label'=>'Tipo de Tarjeta', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'nombretj', 
					'label'=>'Nombre en la Tarjeta', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'numerotj', 
					'label'=>'Numero de Tarjeta(16 Dg.)', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'cvv', 
					'label'=>'CVV', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'month', 
					'label'=>'Mes de expiración', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'year', 
					'label'=>'Año de expiración', 
					'rules'=>'trim|required|xss_clean'					
				)
			
		);
		$this->form_validation->set_rules($config);
		$array=array("required"=>'El campo %s es obligatorio',"valid_email"=>'El campo %s no es valido',"min_length[3]"=>'El campo %s debe ser mayor a 3 Digitos',"min_length[10]"=>'El campo %s debe ser mayor a 10 Digitos','alpha'=>'El campo %s debe estar compuesto solo por letras',"matches"=>"Los Correos Electrónicos no coinciden",'valid_email'=>'El %s campo no es una direccion de Email Valido.');
		$this->form_validation->set_message($array);
		if($this->form_validation->run() !=false){

			$nombre=$this->input->post("nombre");
			$apellidos=$this->input->post("apellidos");
			$telefono=$this->input->post("telefono");
			$movil=$this->input->post("movil");
			$correo=$this->input->post("correo");
			$pais=$this->input->post("pais");
			$estado=$this->input->post("estado");
			$cp=$this->input->post("cp");
			$ciudad=$this->input->post("ciudad");
			$pais=$this->Model_General->paisnombre($pais);
			$preferencias=$this->input->post("prefencias");
			$direccion=$this->input->post("direccion");
			//para la targeta
			$nombretj=$this->input->post("nombretj");
			$tipotj=$this->input->post("tipotj");
			$cvv=$this->input->post("cvv");
			$month=$this->input->post("month");
			$year=$this->input->post("year");
			$numerotj=$this->input->post("numerotj");
			
			
			$respuesta=savebooking($nombre,$apellidos,$correo,$telefono,$movil,$pais,$estado,$direccion,$ciudad,$cp,$preferencias);
			
			if($respuesta->hotelogix->response->status->code===1600){
				$orderId=$respuesta->hotelogix->response->order->id;
				$amount=$respuesta->hotelogix->response->order->orderamount;
	    		$respuestacard=addcard($nombretj,$amount,$numerotj,$tipotj,$cvv,$month,$year,$orderId);
	    		$data["respuestas"]=array("reservacion"=>$respuesta,"Tarjeta"=>$respuestacard);
	    		$_SESSION['data']=$data;
	    		redirect('/gracias/'.$idioma);
			}else{
				$_datav["error"]="Error en la reservación";
				$this->load->view('confirmar_reservacion',$_datav);
			}
			
			
		}else{
			$_datav["error"]=validation_errors();
			$this->load->view('confirmar_reservacion',$_datav);
		}
	}
	public function gracias($idioma){
		if($idioma==="" || !isset($idioma)){
			$idioma="ES";
		}
		$idioma=strtoupper($idioma);
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Confirmar Reservación";
		$this->load->view('master',$data);
		
		
		$data["idioma"]=$idioma;
		$data["respuestas"]=$_SESSION['data'];
		$this->load->view('gracias_recervacion',$data);
		$this->load->view('footer',$data);
	}
			
}
