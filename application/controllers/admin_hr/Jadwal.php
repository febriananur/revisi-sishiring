<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
        $this->load->helper(array('form', 'url'));
		$this->load->model('MPromosi','MPromosi');
		$this->load->model('MInput','MInput');
		$this->load->model('MUpload','MUpload');


        $this->load->library('form_validation');
	}

	public function index()
	{
		$data = [
            'promosi' => $this->MPromosi->tampil_semua(),
			'jabatan_kosong' => $this->MInput->tampil_semua(),
            'karyawan' => $this->MUpload->tampil_semua(),

        ];

		$this->load->view('adminHr/template/v_header');
		$this->load->view('adminHr/template/v_sidebar');
		$this->load->view('adminHr/v_jadwal_interview', $data);
		$this->load->view('adminHr/template/v_footer');
	}

}