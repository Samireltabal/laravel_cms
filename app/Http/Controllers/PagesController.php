<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome To laravel Var' ;
        //return view('pages.index', compact('title'));
        return view('pages.index', compact('title'));
    }
    public function about() {
        return view('pages.about');
    }
    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web design' , 'Web development', 'Digital Marketing']
        );
        return view('pages.services')->with($data);
    }
}
