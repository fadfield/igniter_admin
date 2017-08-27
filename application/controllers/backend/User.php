<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function login()
	{
		if ($this->session->userdata('LOGIN')) {
			redirect(backend_url());
		}
		if ($this->input->post()) {
			$post = $this->input->post();
			$params = array(
				'email'=>$post['email'],
				'password'=>md5($post['password'])
			);
			$user = $this->user_model->login($params);
			if(count($user) > 0) {
				$data = array(
					'LOGIN'=>TRUE,
					'id'=>$user['id'],
					'name'=>$user['name'],
					'email'=>$user['email'],
					'group'=>$user['group'],
					'img_user'=>$user['img_user']
					);
				$this->session->set_userdata($data);
				redirect(base_url().'backend');
			}else{
				$data['result'] = array(
				'success'=>FALSE,
				'message'=>'Username atau Password Salah !!'
				);
				$this->session->set_flashdata('result', $data['result']);
			}
			
		}
		$this->load->view('backend/user/login_view');
	}

	public function logout()
	{	
		$this->session->sess_destroy();
		$data = array(
				'LOGIN'=>FALSE,
				'nama'=>'',
				'username'=>'',
				'email'=>'',
				'img_profil'=>'',
				'status'=>''
				);
		$this->session->set_userdata($data);
		redirect(base_url().'backend');
	}
	public function index()
	{
		$data['session'] = $this->session->userdata();
		$data['page'] = 'backend/user/list';
		$this->load->vars($data);
		$this->load->view('backend/layout');
	}
}
