<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Post;
use App\Tga;

class HomeController extends Controller
{
   public function index() {
    return view('admin.home');
   }
}
