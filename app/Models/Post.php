<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded=[];

    //关联用户
    public function user(){
        return $this->belongsTo(User::class);
    }

    //关联分类
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
