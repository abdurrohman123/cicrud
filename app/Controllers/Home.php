<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data=[
			'title' => 'Home',
			'isi' => 'v_home'
		];
		echo view('layout/v_wrapper', $data);
	}

	public function datamaster()
	{
		$data=[
			'title' => 'Data Master',
			'isi' => 'v_datamaster'
		];
		echo view('layout/v_wrapper', $data);
	}
		//--------------------------------------------------------------------

}
