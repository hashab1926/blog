<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ArticleController extends CI_Controller
{

	public function index($slug = null)
	{
		$data = [
			"page" => "./pages/article",
			"slug" => $slug
		];
		$this->load->view('main', $data);
	}
}
