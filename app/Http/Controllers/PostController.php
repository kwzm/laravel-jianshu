<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostController extends Controller {
	// 列表
	public function index() {
		$posts = Post::orderBy('created_at', 'desc')->paginate(6);
		return view("post/index", compact('posts'));
	}

	// 详情页面
	public function show(Post $post) {
		return view("post/show", compact('post'));
	}

	// 创建页面
	public function create() {
		return view("post/create");
	}

	// 创建逻辑
	public function store() {
		// $post = new Post();
		// $post->title = request('title');
		// $post->content = request('content');
		// $post->save();

		// $params = ['title' => request('title'), 'content' => request('content')];
		// $params = request(['title', 'content']);
		// 
		// 验证
		$this->validate(request(), [
			'title' => 'required|string|max:100|min:5',
			'content' => 'required|string|min:10',
		]);

		$post = Post::create(request(['title', 'content']));

		return redirect('/posts');	
	}

	// 编辑页面
	public function edit() {
		return view("post/edit");
	}

	// 编辑逻辑
	public function update() {

	}

	// 删除逻辑
	public function delete() {

	}

	// 上传图片
	public function imageUpload(Request $request){
		$path = $request->file('wangEditorH5File')->storePublicly(md5(time()));
		return asset('storage/'	. $path);
	}
}
