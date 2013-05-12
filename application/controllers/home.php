<?php

class Home extends CI_Controller
{
	function index()
	{
		$this->load->model('content_model', 'content');
		$sections = $this->content->get_sections();

		$this->load->view('include/header');
		$this->load->view('home', array(
			'sections' => $sections,
		));
		$this->load->view('include/footer');
	}
}