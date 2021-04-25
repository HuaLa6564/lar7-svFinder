<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StuController extends Controller
{  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function __construct()
    {
        $this->middleware('auth:stud');
    } 
    public function index()
    {
        return view('stu');
    }


    
}
