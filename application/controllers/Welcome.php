<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()	{
		$this->load->model('HomeModel');		
		$data['resultado'] = $this->HomeModel->getData();
		
		$this->load->helper('url');


		$this->load->view('homepage', $data);
	}

	public function ajax() {
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'paulohsmarques@gmail.com',
			'smtp_pass' => 'Gpamalls123.',
			'mailtype'  => 'html', 
			'charset'   => 'utf-8'
		);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('paulohsmarques@gmail.com', 'Paulo Marques');
		$this->email->to($_REQUEST['mail']);		
	
		$this->email->subject('Teste de desenvolvimento');
		$this->email->message($_REQUEST['dados']);

		print_r($this->email->send());

	}
}
