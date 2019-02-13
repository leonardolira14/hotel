<?php

/**
 * 
 */
class Errort extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("Model_Menu");
		$this->load->helper('date');
	}
	public function err_404_T(){
		
		$idioma=strtoupper("ES");
		$data["Idioma"]=strtolower($idioma);
		$data["textohead"]=$this->Model_Menu->gettext($idioma);
		$data["listarooms"]=$this->Model_Menu->Gettextlistrooms($idioma);
		$data["textfooter"]=$this->Model_Menu->Gettextfooter($idioma);
		$data["title"]="Hotel Marqués del Ángel | Mezcaleria & Cava del Marqués";
		$this->load->view('master',$data);
		$this->load->view('errors/html/error_404');
	}
}