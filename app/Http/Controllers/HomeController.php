<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function index_one_page()
    {
        return view('index-one-page');
    }
    public function index_dark()
    {
        return view('index-dark');
    }
    public function index2()
    {
        return view('index-2');
    }
    public function index_2_one_page()
    {
        return view('index-2-one-page');
    }
    public function index_2_dark()
    {
        return view('index-2-dark');
    }
    public function index3()
    {
        return view('index-3');
    }
    public function index_3_one_page()
    {
        return view('index-3-one-page');
    }
    public function index_3_dark()
    {
        return view('index-3-dark');
    }
    public function index4()
    {
        return view('index-4');
    }
    public function index_4_one_page()
    {
        return view('index-4-one-page');
    }
    public function index_4_dark()
    {
        return view('index-4-dark');
    }
    public function index5()
    {
        return view('index-5');
    }
    public function index_5_one_page()
    {
        return view('index-5-one-page');
    }
    public function index6()
    {
        return view('index-6');
    }
    public function index_6_one_page()
    {
        return view('index-6-one-page');
    }
    public function index7()
    {
        return view('index-7');
    }
    public function index_7_one_page()
    {
        return view('index-7-one-page');
    }
    public function index_boxed()
    {
        return view('index-boxed');
    }
    public function index_rtl()
    {
        return view('index-rtl');
    }
    public function demo_landing()
    {
        return view('demo-landing');
    }
}
