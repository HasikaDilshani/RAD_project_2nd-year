<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('common');
		$this->load->view('signup');
		$this->load->view('commonfooter');
	}
	
}
