<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{

	public function index()
	{
		$data = [
			'page' => "./pages/dashboard"
		];
		$this->load->view('main', $data);
	}
}
