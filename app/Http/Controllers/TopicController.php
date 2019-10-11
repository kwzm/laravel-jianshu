<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;

class TopicController extends Controller
{
    public show(Topic $topic) {
    	return view('topic/show');
    }
}
