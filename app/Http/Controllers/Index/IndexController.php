<?php
namespace App\Http\Controllers\Index;


use Faker\Generator;
use Illuminate\Support\Facades\Cache;

class IndexController extends BaseController
{
    public function index(Generator $faker){
        dd(Cache::flush());
        return view('index.index.index');
    }
}
