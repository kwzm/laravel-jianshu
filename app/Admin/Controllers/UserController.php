<?php

namespace App\Admin\Controllers;

class UserController extends Controller {
	// 管理员列表页面
	public function index(){
		return view('/admin/user/index');
	}

	// 管理员创建页面
	public function create(){
		return view('/admin/user/add');
	}

	// 创建操作
	public function store(){

	}
}