<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function __construct()
	{
		$this->session = service('session');
		$this->config = config('Auth');
		$this->auth = service('authentication');
	}

	public function index()
	{
		$data = [
			'config' => $this->config,
			'title' => 'userlist'
		];
		return view('admin/listPendaftar', $data);
		// return view('');

	}
	
	public function listPendaftar()
	{
		$db		 = \Config\Database::connect();
		$builder =  $db->table('users');
		$builder->select('users.id as userid, fullname, jenis_kelamin, tempat_lahir, tanggal_lahir, name, user_image');	
		$builder->join('biodata', 'biodata.id = users.id');
		$builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
		$builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
		$query = $builder->get();


		

		$data = [
			'config' => $this->config,
			'title' => 'userlist',
			'users' => $query->getResult()
		];


		return view('admin/listPendaftar', $data);
		// return view('');

	}
	
	public function detail($id)
	{
		$db		 = \Config\Database::connect();
		$builder =  $db->table('users');
		$builder->select('*');	
		$builder->join('biodata', 'biodata.id = users.id');
		$builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
		$builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
		$builder->where('users.id', $id);
		$query = $builder->get();
		
	
		
	
		$data = [
			'config' => $this->config,
			'title' => 'userlist',
			'users' => $query->getRow()
		];
	
	
		return view('admin/details', $data);
		// return view('');
	
	}
}
