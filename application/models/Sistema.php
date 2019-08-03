<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sistema extends CI_Model {

	function _construct()
	{
		parent::_construct();
	}

	public function log($user, $accion, $comentario, $variable, $ip, $huella){
		$data = array(
			'user' => $user,
			'accion' => $accion,
			'comentario' => $comentario,
			'variable' => $variable,
			'ip' => $ip,
			'huella' => $huella
		);
		$this->db->insert('log',$data);
	}


}
