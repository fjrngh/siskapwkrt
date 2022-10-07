<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		check_not_login();
		// check_admin(); // role akses
		$this->load->model('dashboard_m');
		// $this->load->library('form_validation');
	}

	public function index()
	{
		// $data['row'] = $this->dashboard_m->get_daycheckout();

		$this->template->load('template', 'v_dashboard');
	}
}
