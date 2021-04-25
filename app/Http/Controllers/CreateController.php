<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
            return view('create');
    }
    public function showUploadFile(Request $request){
        $file = $request->file('image');
        //Display File Name
        echo 'File Name: '.$file->getClientOriginalName();
        echo '
    ';
    //Display File Extension
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '
        ';
    //Display File Real Path
        echo 'File Real Path: '.$file->getRealPath();
        echo '
        ';
    //Display File Size
        echo 'File Size: '.$file->getSize();
        echo '
        ';
    //Display File Mime Type
        echo 'File Mime Type: '.$file->getMimeType();
    //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        }
}
