<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('welcome_message');
		$data['title'] = 'Dashboard';
		$this->load->view('template/header', $data);
		$this->load->view('dashboard/index');
		$this->load->view('template/footer');
	}

	public function merk_mobil()
	{
		# code...
		$data['title'] = 'Master Mobil';
		$data['breadcrumb'] = 'Merk Mobil';
		$this->load->view('template/header', $data);
		$this->load->view('mobil/v_merk_mobil', $data);
		$this->load->view('template/footer');
	}
}
