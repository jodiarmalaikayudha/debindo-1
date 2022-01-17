<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Debindo extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('index');
		$this->load->view('footer');
	}
}
