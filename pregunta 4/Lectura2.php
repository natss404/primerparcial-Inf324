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

	
}
