<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

	}
	
	public function index()
	{   
	
		$data['map'] = $this->googlemaps->create_map();
		$this->load->view('header', $data);
		$this->load->view('index', $data);
		$this->load->view('footer', $data);
		$user_email = $this->input->post('email');
		if(strlen($user_email) > 4){
			
		$this->email->set_newline("\r\n");
		$this->email->from($user_email);
		$this->email->to(EMAIL_TO);
		$this->email->subject('Email Subscription');
		$this->email->message($user_email.' Has subscribed');
		if($this->email->send()){
			// $this->session->set_flashdata("email_sent","Email sent successfully.");
			redirect(base_url('/'));
		}else{
			// $this->session->set_flashdata("email_sent","Error in sending Email.");
			redirect(base_url('/'));
		}
		}
			
		
	}

	
}
