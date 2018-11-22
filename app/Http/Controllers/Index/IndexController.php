<?php
namespace App\Http\Controllers\Index;


use Faker\Generator;

class IndexController extends BaseController
{
    public function index(Generator $faker){
        return view('index.index.index');
    }
}
