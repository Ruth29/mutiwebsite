<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->load->library('session');
	}
	
	public function index()
	{   
	
		$data['map'] = $this->googlemaps->create_map();
		$this->load->view('header', $data);
		$this->load->view('index', $data);
		$this->load->view('footer', $data);
		
			
		// $this->email->set_newline("\r\n");
		// $this->email->from($user_email);
		// $this->email->to(EMAIL_TO);
		// $this->email->subject('Email Subscription');
		// $this->email->message($user_email.' Has subscribed');
		// if($this->email->send()){
		// 	// $this->session->set_flashdata("email_sent","Email sent successfully.");
		// 	redirect(base_url('/'));
		// }else{
		// 	// $this->session->set_flashdata("email_sent","Error in sending Email.");
		// 	redirect(base_url('/'));
		// }
		// }
			
		
	}

	public function subscribe(){
		if($this->form_validation->run() == FALSE)
		{
			$data['map'] = $this->googlemaps->create_map();
			$this->load->view('header', $data);
			$this->load->view('index',$data);
			$this->load->view('footer',$data);
		
		}else{
			$sent_by = $this->input->post('email');
			$config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => SMTP_USER,
                'smtp_pass' => SMTP_PASS,
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );

            $message = $sent_by;
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from($sent_by);
            $this->email->to('Customer@mutiinteriors.com');
            $this->email->subject('New Subscriber');
            $this->email->message($message);
            if ($this->email->send()) {
            	// $this->session->set_flashdata("success","Email Has been sent successfully");
            	redirect('index.php/home');
            }
		}
	}

	
}
