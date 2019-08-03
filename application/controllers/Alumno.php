<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Alumno extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function registro()
	{
		$this->load->view('nuevo_alumno');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */