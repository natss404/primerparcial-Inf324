<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lectura2 extends CI_Controller {

	public function index()
	{
		$this->load->model("Voyheska_Model");
		$filas=$this->Voyheska_Model->docente();
		$data['ci']='1';
		$data['sigla']='inf360';
		$data['docente']=$filas;
		$this->load->view('myviewLectura', $data);
	}

	public function eliminar(){
			$this->load->model("Voyheska_Model");
		$ci= $this->uri->segment(3);
		$this->Voyheska_Model->eliminarDocente($ci);
	}
	
	
		
	public function editar($ci=null)
	{
			
			if(!$ci == null){
				$this->load->database();
				$ci=$this->db->escape((int)$ci);
				$this->load->model("Voyheska_Model");
				$doc= $this->Voyheska_Model->getDocente($ci);
				$this->load->view("editar", compact("doc"));
			}
			else {
				header("Location: Lectura2.php");
			}
		
	
	}

	
	public function actualizarDocente(){
		if($this->input->post()){
			
			$this->load->model("Voyheska_Model");
				$this->load->database();
			$ci=$this->db->escape((int)$_POST["ci"]);
			$sigla=$this->db->escape($_POST["sigla"]);
			if($this->Voyheska_Model->actualizarDocente($ci, $sigla)){
				 $this->load->helper('url'); 
				header("Location: https://localhost/code/index.php/Lectura2");
			}
		}
	}
}
