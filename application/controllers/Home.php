<?php
	class Home extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->helper('url');
			$this->load->library('session');
		}

		public function index() {

			$this->load->view('frontend');
		}
	}
?>