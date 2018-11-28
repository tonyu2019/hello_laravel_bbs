<?php

namespace App\Http\Controllers\Index;

use Illuminate\Http\Request;

class ReplyController extends Controller
{
    //
    public function store(Request $request){
        dd($request->all());
    }
}
