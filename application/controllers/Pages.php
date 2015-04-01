<?php
// 01 create class Pages
class Pages extends CI_Controller {
	
	// 02 create method view with one argument $page
	public function view($page = 'home')
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
		// 03 we don't hawe page for that!!!
		show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
		
	}
	
	
	
}

