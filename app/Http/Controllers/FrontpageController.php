<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    //

     public function index()
    {
        //   
       return view('frontpage.home');
    }
    public function about()
    {
        //   
       return view('frontpage.about');
    }
    public function tour()
    {
        //   
       return view('frontpage.tour');
    }
    public function hotel()
    {
        //   
       return view('frontpage.hotel');
    }
    public function blog()
    {
        //   
       return view('frontpage.blog');
    }
    public function contact()
    {
        //   
       return view('frontpage.contact');
    }

}
