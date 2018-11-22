<?php

namespace App\Http\Controllers\Index;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['show', 'index']]);
    }
}
