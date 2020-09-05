<?php
//include 'http://localhost/mantis/application/modules/assessment/PhPhpickle/phpicle.php'
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
		public function dataforml()
		{
			$gender = $this->input->post('gender');
			$age = $this->input->post('age');
			$education = $this->input->post('education');
			$computer = $this->input->post('computer');
			$hospitalized = $this->input->post('hospitalized');
			$days_hospitalized = $this->input->post('days_hospitalized');
			$disability = $this->input->post('disability');
			$live_parents = $this->input->post('live_parents');
			$income = $this->input->post('income');

			$unemployed = $this->input->post('unemployed');
			$read = $this->input->post('read');
			$hospitalized_times = $this->input->post('hospitalized_times');
			$concentration = $this->input->post('concentration');
			$anxiety = $this->input->post('anxiety');
			$stress = $this->input->post('stress');
			$overthinking = $this->input->post('overthinking');
			$mood_swings = $this->input->post('mood_swings');
			$panic = $this->input->post('panic');
			$comppulsive = $this->input->post('Compulsive');
			$tiredness = $this->input->post('tiredness');
			
			
			$this->load->view('report.html');
			
		//$filename='gender_labelencoder.sav'
		 // $data = phpickle::load_stream('gender_labelencoder.sav');
			//echo "hrey";
		}

		
	}