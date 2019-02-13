<?

/**
 * 
 */
class Model_General extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	//funcion para obtener los paises 
	public function pais(){
		$sql=$this->db->select('*')->get("pais");
		return $sql->result_array();
	}
	//funcion para obtener el nombre del pais
	public function paisnombre($nombre){
		$sql=$this->db->select("paisnombre")->where("id='$nombre'")->get("pais");
		return $sql->row_array()["paisnombre"];
	}
	//funcion para obtener los estados depende el 
	public function estados($id){
		$sql=$this->db->select("*")->where("ubicacionpaisid='$id'")->get("estado");
		return $sql->result_array();
	}
}