<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Docente extends CI_Controller {

	public function index()
	{
		$ci='1';
		$sigla='inf360';
		$data['ci']=$ci;
		$data['sigla']=$sigla;
		$this->load->helper('url');
		$data['sitio1']=site_url('Welcome.php');
		$data['sitio2']=base_url();
		$data['sitio3']=current_url();
		$this->load->view('myviewDocente', $data);
	}
	
}
