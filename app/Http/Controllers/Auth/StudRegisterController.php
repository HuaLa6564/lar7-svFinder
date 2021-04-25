<?php

namespace App\Http\Controllers\Auth;

use App\Stud;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:');
    }

    public function showRegistrationForm()
    {
        return view('auth.stud-register');
    }

    public function register(Request $request)
    {
        // Validate form data
        $this->validate($request,
            [
                'stud_id' => ['required', 'string', 'max:255'],
                'stud_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:studs'],
                'password' => ['required', 'string', 'min:8'],
                'prog_code' => ['required', 'string', 'max:255'],
            ]
        );

        // Create stud user
        try {
            $stud = Stud::create([
                'stud_id' => $request->stud_id,
                'stud_name' => $request->stud_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'prog_code' => $request->prog_code,
            ]);

            // Log the stud in
            Auth::guard('admin')->loginUsingId($stud->id);
            return redirect()->route('admin.dashboard');
        } catch (\Exception $e) {
            return redirect()->back()->withInput($request->only('name', 'email'));
        }
    }
}
