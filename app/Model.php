<?php

namespace App;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
	// 不可注入的字符串
    protected $guarded = [];
}
