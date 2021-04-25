<?php

namespace App\Http\Controllers;

use App\Stud;
use Illuminate\Http\Request;

class TryController extends Controller
{
    
    public function index(Stud $studs){
        // return view ('studs.try');
        $studs = Stud::latest()->paginate(100);
  
        return view('studs.try',compact('studs'))
            ->with('i', (request()->input('page', 1) - 1) * 100);
        // return view('studs.try',compact('studs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create(Stud $studs)
    // {
    //     return view('studs.create',compact('studs'));
    // }

    public function store(Request $request)
    {
        $request->validate([
            'stud_id' => 'required',
            'stud_name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'prog_code' => 'required',
        ]);
  
        Stud::create($request->all());
   
        return redirect()->route('studs.try')
                        ->with('success','Created successfully.');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Blog  $blog
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Stud $studs)
    // {
    //     return view('studs.show',compact('stud'));
    // }
   
    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Blog  $blog
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Stud $studs)
    // {
    //     return view('studs.edit',compact('stud'));
    // }
  
    
    // public function update(Request $request, Stud $studs)
    // {
    //     $request->validate([
    //         'stud_id' => 'required',
    //         'stud_name' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',
    //         'prog_code' => 'required',
    //     ]);
  
    //     $stud->update($request->all());
  
    //     return redirect()->route('studs.try')
    //                     ->with('success','Updated successfully');
    // }
  
    
    // public function destroy(Stud $studs)
    // {
    //     $stud->delete();
  
    //     return redirect()->route('studs.try')
    //                     ->with('success','Deleted successfully');
    // }
   
    
}
