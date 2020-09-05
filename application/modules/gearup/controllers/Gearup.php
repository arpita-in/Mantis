<?php
//include 'http://localhost/mantis/application/modules/assessment/PhPhpickle/phpicle.php'
defined('BASEPATH') OR exit('No direct script access allowed');

class Gearup extends  MX_Controller  {

	
		public function index ()
		{
			
			$this->load->view('index.html');
			//echo "hrey";
		}
		public function test ()
		{
			
			$this->load->view('test.html');
			//echo "hrey";
		}
		

		
	}