<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Acceso extends CI_Controller
{
	function _construct()
	{
		parent::_construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}

	function index()
	{

			$this->load->view('login');
		
	}

	function accesoEstudiantes()
	{
		$this->Sistema->log($this->tank_auth->get_username(), 'GET', 'Acceso/login', '', $this->input->ip_address(), date_default_timezone_get());

		if ($this->tank_auth->is_logged_in()) { 
			$this->Sistema->log($this->tank_auth->get_username(), 'GET', 'Acceso/login', 'Redireccion a principal', $this->input->ip_address(), date ( format [timestamp] ));
			redirect('Acceso/principal'); }

		$data['titulo'] = 'Acceso InvenTI v0.01';
		
		if ($_POST) { 

			$this->Sistema->log($this->tank_auth->get_username(), 'POST', 'Acceso/login', 'Intento de acceso con credenciales '.$_POST['username'].' - '.$_POST['password'], $this->input->ip_address(), date ( format [timestamp] ));

			$login = $this->tank_auth->login($_POST['username'], $_POST['password'], false, true, true);
			if ($login==1) { redirect('Acceso/principal'); } else { $this->load->view('login'); }

		 } else { $this->load->view('login'); }
	}

	function accesoProfesores()
	{
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */