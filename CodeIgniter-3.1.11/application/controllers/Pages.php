<?php
// Create Pages class, which contains all the methods and variables in CI_Controller
class Pages extends CI_Controller {
	// view method accepting one argument (`$page`)
	public function view($page = 'home')
	{
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
			show_404();
		}

		$data['title'] = ucfirst($page); // $data['title'] = 'Home'

		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}
