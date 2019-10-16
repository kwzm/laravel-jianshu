<?php

namespace App\Admin\Controllers;

use \App\AdminUser;

class UserController extends Controller {
	// 管理员列表页面
	public function index(){
		$users = AdminUser::paginate(10);
		return view('/admin/user/index', compact('users'));
	}

	// 管理员创建页面
	public function create(){
		return view('/admin/user/add');
	}

	// 创建操作
	public function store(){
		$this->validate(request(), [
			'name' => 'required|min:3',
			'password' => 'required',
		]);

		$name = request('name');
		$password = bcrypt(request('password'));
		AdminUser::create(compact('name', 'password'));

		return redirect('/admin/users');
	}
}