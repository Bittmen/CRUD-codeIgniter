<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('CrudModel');
		$this->message = array(
			"message" => ""
		);
	}

	public function index()
	{
		$this->principal();
	}

	public function login()
	{
		if($this->input->post())
		{
			$user = $this->input->post('usuario');
			$pwd = $this->input->post('password');
			$rol = $this->input->post('rol');

			$res = $this->CrudModel->login($user, $pwd, $rol);

			if($res == FALSE)
			{	
				$this->load->view('login',$this->message['message'] = 'No existe el usuario, verifique sus credenciales');
				return;
			}

			$sessionData = array(
				"ID" => $res->ID,
				"NOMBRE" => $res->NOMBRE,
				"APELLIDOS" => $res->APELLIDOS,
				"EDAD" => $res->EDAD,
				"SEXO" => $res->SEXO,
				"ROL" => $rol,
				"ACTIVO" => TRUE
			);

			$this->session->set_userdata($sessionData);
			redirect('Crud/principal');
		} 
		else
		{
			$this->load->view('login',$this->message['message'] = 'Valores vacíos');
			return;
		}
	} 

	public function principal()
	{
		if($this->session->userdata('ACTIVO'))
		{	
			if($this->session->userdata('ROL') == "USUARIO")
			{
				$this->load->view('animes');
			}
			else
			{
				$this->load->view('usuarios');
			}
		}
		else
		{
			$this->load->view('login');
		}
	}

	public function getUsers()
	{
		$users1 = array(
			"ID" => "1",
			"Nombre" => "Juan",
			"Apellidos" => "Gonzáles",
			"Edad" => 22,
			"Sexo" => "Masculino"
		);

		$users2 = array(
			"ID" => "1",
			"Nombre" => "Juan",
			"Apellidos" => "Gonzáles",
			"Edad" => 22,
			"Sexo" => "Masculino"
		);

		$users3 = array(
			"ID" => "1",
			"Nombre" => "Juan",
			"Apellidos" => "Gonzáles",
			"Edad" => 22,
			"Sexo" => "Masculino"
		);

		$users4 = array(
			"ID" => "1",
			"Nombre" => "Juan",
			"Apellidos" => "Gonzáles",
			"Edad" => 22,
			"Sexo" => "Masculino"
		);

		$users5 = array(
			"ID" => "1",
			"Nombre" => "Juan",
			"Apellidos" => "Gonzáles",
			"Edad" => 22,
			"Sexo" => "Masculino"
		);

		echo json_encode(array($users1, $users2, $users3, $users4, $users5));
	}

	public function getAnimes()
	{
		$anime = array(
			"ID" => "1",
			"Nombre" => "Juan",
			"Genero" => "Gonzáles",
			"Link" => "https://www.animeflv.net"
		);
		$anime2 = array(
			"ID" => "1",
			"Nombre" => "Juan",
			"Genero" => "Gonzáles",
			"Link" => "https://www.animeflv.net"
		);
		echo json_encode(array($anime, $anime2));
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('login', $this->message['message'] = 'Sesión finalizada');
	}

}
