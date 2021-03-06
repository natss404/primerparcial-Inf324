<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voyheska_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function docente()
	{
	 $this->load->database();
	 $query=$this->db->query('select * from docente');
	 return $query->result();
	}
	 
	
	public function eliminarDocente($ci)
	{
	 $this->load->database();
	 $query = "DELETE from docente where ci=$ci";
	 $this->db->query($query); 
	 //delete('docente'array('ci'=>$ci));
	}
	
	public function getDocente(int $ci){
		 $this->load->database();
		return $this->db->query("select ci, sigla from docente where ci={$ci}")->row();
	}
	
	public function actualizarDocente(int $ci, string $sigla){
	    $this->load->database();
		return $this->db->query("UPDATE docente set sigla={$sigla} where ci={$ci}");
		
	}

}
