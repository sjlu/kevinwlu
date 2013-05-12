<?php

class Home extends CI_Controller
{
	function index()
	{
		$this->load->model('content_model', 'content');
		$sections = $this->content->get_sections();
		$attributes = $this->content->get_attributes();

		$this->load->view('include/header', array(
			'attributes' => $attributes
		));
		$this->load->view('home', array(
			'sections' => $sections,
			'attributes' => $attributes
		));
		$this->load->view('include/footer');
	}
}