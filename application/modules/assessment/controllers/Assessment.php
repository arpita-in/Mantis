<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assessment extends  MX_Controller  {

	
		public function index ()
		{
			
			$this->load->view('assessment-view.html');
			//echo "hrey";
		}
		public function test ()
		{
			
			$this->load->view('test.html');
			//echo "hrey";
		}
		
	}