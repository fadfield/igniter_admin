<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('LOGIN')) {
			redirect(backend_url().'login');
		}
	}
	public function index()
	{
		$data['session'] = $this->session->userdata();
		$data['menu'] = 'backend/menu';
		$data['page'] = 'backend/dasbor/main';
		$this->load->vars($data);
		$this->load->view('backend/layout');
	}
}
