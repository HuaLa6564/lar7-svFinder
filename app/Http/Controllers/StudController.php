<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class StudController extends Controller
{
    
    //
    //
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:stud');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(5);
  
        return view('blogs.ide',compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('stud');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'classNo' => 'required',
    //         'name' => 'required',
    //         'id' => 'required',
    //     ]);
  
    //     Blog::create($request->all());
   
    //     return redirect()->route('blogs.ide')
    //                     ->with('success','Created successfully.');
    // }
    public function edit(Blog $blog)
    {
        return view('blogs.editStud',compact('blogs'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'staff_id' => 'required',
            'staff_name' => 'required',
            'prog_code' => 'required',
        ]);
  
        $blog->update($request->all());
  
        return redirect()->route('blogs.ide')
                        ->with('success','Updated successfully');
    }
  
}
