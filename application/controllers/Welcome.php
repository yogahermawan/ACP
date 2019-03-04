<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('main_page',[
			'page' => 'produk/index'
		]);
	}

	public function error_404()
	{
		$this->load->view('main_page',[
			'title' => 'ACP - Galat: Halaman tidak ditemukan.',
			'page' => 'error/html/error_404'
		]);
	}
}
