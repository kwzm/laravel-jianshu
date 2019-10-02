<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // 个人设置页面
    public function setting() {
    	$user = \Auth::user();
    	return view('user.setting', compact('user'));
    }

    // 个人设置行为
    public function settingStore() {
    	// 验证
    	$this->validate(request(), [
    		'name' => 'required|min:3',
    	]);

    	// 逻辑
    	$name = request('name');
    	$user = \Auth::user();
    	if ($name != $user->name) {
    		if (User::where('name', $name) -> count() > 0)	{
    			return back()->withErrors('用户名已经被注册');
    		}
    		$user->name = $name;
    	}

    	if (request('avatar')) {
    		$path = request('avatar')->storePublicly($user->id);
    		$user->avatar = "/storage/" . $path;
    	}

    	$user->save();

    	// 渲染
    	return back();
    }
}
