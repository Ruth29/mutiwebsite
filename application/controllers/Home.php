<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
		$user_email = $this->input->post('email');
		if(strlen($user_email) > 4){
			$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => EMAIL_SENDER,
			'smtp_pass' => EMAIL_PASSWORD,
			'mail_type' => 'html',
			'wordwrap' => TRUE);

		$message = 'Hey';
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from($user_email);
		$this->email->to(EMAIL_TO);
		$this->email->subject('Email Subscription');
		$this->email->message($user_email.' Has subscribed');
		$result = $this->email->send();
		}
			
		
	}

	
}
