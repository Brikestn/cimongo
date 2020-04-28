<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('categories_model');
    }
	
	public function index()
	{
		$data['categories']=$this->categories_model->findAll();

		$this->load->view('layout/head',$data);
		$this->load->view('layout/header');
		$this->load->view('layout/left_menu');
		$this->load->view('layout/content');
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}
}
