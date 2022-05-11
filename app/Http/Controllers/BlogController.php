<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function blogs(){
        return view('blogs');
    }
    public function singel_blog(){
        return view('singel-blog');
    }
}
