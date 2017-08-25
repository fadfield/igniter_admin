<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {
	public function index()
	{
		$data['page'] = 'backend/dasbor/main';
		$this->load->vars($data);
		$this->load->view('backend/layout');
	}
}
