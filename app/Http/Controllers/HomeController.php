<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Invoker\Invoker;

class HomeController extends Controller
{
    public function __invoke(){
        return view('welcome');
    }
}
