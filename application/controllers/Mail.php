<?

/**
 * 
 */
class Mail extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model("Model_Mail");
		
	}
	public function cotizacion(){
			$config=array( array(
					'field'=>'nombre', 
					'label'=>'Nombre', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'email', 
					'label'=>'Correo Electrónico', 
					'rules'=>'trim|required|valid_email|xss_clean'					
				),
			array(
					'field'=>'tel', 
					'label'=>'Teléfono', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'envento', 
					'label'=>'Tipo Evento', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'personas', 
					'label'=>'No.personas', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'comentarios', 
					'label'=>'Comentarios', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'fecha', 
					'label'=>'Fecha', 
					'rules'=>'trim|required|xss_clean'					
				)
		);
		$this->form_validation->set_rules($config);
		$array=array("required"=>'El campo %s es obligatorio',"valid_email"=>'El campo %s no es valido',"min_length[3]"=>'El campo %s debe ser mayor a 3 Digitos',"min_length[10]"=>'El campo %s debe ser mayor a 10 Digitos','alpha'=>'El campo %s debe estar compuesto solo por letras',"matches"=>"Las contraseñas no coinciden",'is_unique'=>'El contenido del campo %s ya esta registrado');
		$this->form_validation->set_message($array);
		if($this->form_validation->run() !=false){
			$nombre=$this->input->post("nombre");
			$email=$this->input->post("email");
			$tel=$this->input->post("tel");
			$envento=$this->input->post("envento");
			$fecha=$this->input->post("fecha");
			$personas=$this->input->post("personas");
			$comentarios=$this->input->post("comentarios");
			$this->Model_Mail->enviar_cotizacion($nombre,$email,$tel,$envento,$fecha,$personas,$comentarios);
			$dat["pass"]=1;
		}else{
			$dat["pass"]=0;
			$dat["mensaje"]=validation_errors();
		}
		echo json_encode($dat);
	}
	public function enviar_leatad(){
		$config=array( array(
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
					'field'=>'correo', 
					'label'=>'Correo Electrónico', 
					'rules'=>'trim|required|valid_email|xss_clean'					
				),
			array(
					'field'=>'tel', 
					'label'=>'Teléfono', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'pais', 
					'label'=>'País', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'ciudad', 
					'label'=>'Ciudad', 
					'rules'=>'trim|required|xss_clean'					
				),
			array(
					'field'=>'fechanacimiento', 
					'label'=>'Fecha de Nacimiento', 
					'rules'=>'trim|required|xss_clean'					
				)
		);
		$this->form_validation->set_rules($config);
		$array=array("required"=>'El campo %s es obligatorio',"valid_email"=>'El campo %s no es valido',"min_length[3]"=>'El campo %s debe ser mayor a 3 Digitos',"min_length[10]"=>'El campo %s debe ser mayor a 10 Digitos','alpha'=>'El campo %s debe estar compuesto solo por letras',"matches"=>"Las contraseñas no coinciden",'is_unique'=>'El contenido del campo %s ya esta registrado');
		$this->form_validation->set_message($array);
		if($this->form_validation->run() !=false){
			$nombre=$this->input->post("nombre");
			$_Apellidos=$this->input->post("apellidos");
			$_telefono=$this->input->post("tel");
			$pais=$this->input->post("pais");
			$fecha=$this->input->post("fecha");
			$ciudad=$this->input->post("ciudad");
			$correo=$this->input->post("correo");
			$this->Model_Mail->enviar_leatad($nombre,$_Apellidos,$_telefono,$correo,$pais,$ciudad,$fecha);
			$dat["pass"]=1;
		}else{
			$dat["pass"]=0;
			$dat["mensaje"]=validation_errors();
		}
		echo json_encode($dat);
	}
}