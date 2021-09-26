<?php

namespace App\Controllers;

use App\Models\BiodataModel;
use App\Models\UsersModel;

class User extends BaseController
{
	protected $biodataModel;
	protected $userModel;
	public function __construct()
	{
		$this->session = service('session');
		$this->config = config('Auth');
		$this->auth = service('authentication');
		$this->biodataModel = new BiodataModel();
		$this->userModel = new UsersModel();
	}

	public function index()
	{
		session();
		
		$biodata = $this->biodataModel->where('id', user()->id)->findAll();;
		$data = [
			'config' => $this->config,
			'title' => 'Biodata',
			'biodata' => $biodata,
			'validation' => \Config\Services::validation()
		];
					

		return view('user/index', $data);
		// return view('');

	}

	public function tambahData()
	{
		session();

		if(!$this->validate([
			'fullname' => 'required',
			'jenis_kelamin' => 'required',
			'tempat_lahir' => 'required',
			'tanggal_lahir' => 'required',
			'father_name' => 'required',
			'mother_name' => 'required',
			'adress' => 'required',
			'phone_number' => 'required',
			'user_image' => [
				'rules' => 'uploaded[user_image]|max_size[user_image,2048]|is_image[user_image]|mime_in[user_image,image/jpg,image/jpeg,image/png]',
				'errors' => [
					'uploaded' => 'Pilih Foto terlebih dahulu',
					'max_size' => 'Ukuran foto harus kurang dari 2MB',
					'is_image' => 'Yang anda pilih bukan gambar',
					'mime_in' => 'Yang anda pilih bukan gambar'
				]
			],
			'kk' => 'uploaded[kk]',
			'akta' => 'uploaded[akta]'
		])){
			return redirect()->to('user/index')->withInput();
		}
		
		$fileFoto = $this->request->getFile('user_image');

		dd($fileFoto);


		// dd($this->request->getVar('jenis_kelamin'));
		$data = [
			'title' => 'Status Pendaftaran',
			'id' => user()->id,
			'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
			'tempat_lahir' => $this->request->getVar('tempat_lahir'),
			'tanggal_lahir' => $this->request->getVar('tanggal_lahir')
		];
		$data2 = [
			'fullname' => $this->request->getVar('fullname'),
			'father_name' => $this->request->getVar('father_name'),
			'mother_name' => $this->request->getVar('mother_name'),
			'adress' => $this->request->getVar('adress'),
			'phone_number' => $this->request->getVar('phone_number'),
			'user_image' => $this->request->getVar('user_image'),
			'kk' => $this->request->getVar('kk'),
			'akta' => $this->request->getVar('akta')

		];


		$this->biodataModel->insert($data);
		$this->userModel->update(user()->id,$data2);


		return redirect()->to('user', $data, $data2);
	}

	public function status()
	{
		$biodata = $this->biodataModel->where('id', user()->id)->findAll();;
		$data = [
			'config' => $this->config,
			'title' => 'Status Pendaftaran',
			'biodata' =>$biodata
		];

		return view('user/status', $data);
		// return view('');

	}
	
}
