<?php
//include 'http://localhost/mantis/application/modules/assessment/PhPhpickle/phpicle.php'
defined('BASEPATH') OR exit('No direct script access allowed');

class Gearup extends  MX_Controller  {

	
		public function index ()
		{
			
			$this->load->view('index.html');
			//echo "hrey";
		}
		public function login ()
		{
			
			$this->load->view('login-view.html');
			//echo "hrey";
		}
		public function authenticate ()
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if ($email=="srivastavaarpita2001@gmail.com" && $password=="Arpita") {
				$this->load->view('Assessment');
				# code...
			}
			
			//$this->load->view('login-view.html');
			//echo "hrey";
		}

		

		
	}