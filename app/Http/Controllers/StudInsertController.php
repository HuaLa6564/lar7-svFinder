<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudInsertController extends Controller
{
    public function insertform()
    {
        return view('stud_create');
    }      
    public function insert(Request $request)
    {
        $name = $request->input('stud_id');
        DB::insert('insert into studs (stud_name) values(?)',['$stud_name']);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}