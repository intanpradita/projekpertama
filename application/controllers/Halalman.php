<?php

class Halalman extends CI_Controller
{
	function view()
	{
		$data['Judul'] = 'Judul Halaman';
		$data ['konten'] ='halaman ini di panggil dari controller Halaman'

		$this->load->view('hal_view', $data);
	}


}