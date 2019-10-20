<?php

namespace App\Admin\Controllers;


class RoleController extends Controller {
	// 角色列表
	public function index() {
		return view('/admin/role/index');
	}

	// 创建角色
	public function create() {
		return view('/admin/role/add');
	}


	// 创建角色行为
	function store() {

	}

	// 角色权限关系页面
	function permission() {
		return view('/admin/role/permission');
	}

	// 储存角色权限行为
	function storePermission() {

	}
}