<?php

namespace App\Controllers;

class ErrorCtrl extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->checkLoggedIn();

		$header['css'] = array(CSS_PATH . '/errorpage.css');

		echo view('templates/header', $header);
		echo view('errorpage');
		echo view('templates/footer');
	}
}
