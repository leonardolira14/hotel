<?
/**
 * 
 */
class Model_Menu extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}
	public function Gettext($idioma){
		$sql=$this->db->select("*")->where("Idioma='$idioma'")->get("menuhead");
		return $sql->row();
	}
	public function Gettexthome($idioma){
		$sql=$this->db->select("*")->where("Idioma='$idioma'")->get("home");
		return $sql->row();
	}
	public function Gettextfooter($idioma){
		$sql=$this->db->select("*")->where("Idioma='$idioma'")->get("footer");
		return $sql->row();
	}
	public function Gettextlistrooms($idioma){
		$sql=$this->db->select("Habitaciones")->where("Idioma='$idioma'")->get("home");
		return $sql->row();
	}
	public function gettextsuitsp($idioma){
		$sql=$this->db->select("*")->where("Idioma='$idioma'")->get("suites");
		return $sql->row();
	}
	public function gettextclassic($idioma){
		$sql=$this->db->select("*")->where("Idioma='$idioma'")->get("clasica");
		return $sql->row();
	}
	
}