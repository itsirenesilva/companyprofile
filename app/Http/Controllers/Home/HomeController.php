<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }

    public function about() {
        return view('home.about');
    }

    public function product() {
        return view('home.product');
    }
    
    public function service() {
        return view('home.service');
    }

    public function news() {
        return view('home.news');
    }

    public function career() {
        return view('home.career');
    }

    public function contact() {
        return view('home.contact');
    }

    public function article() {
        return view('home.article');
    }

}
