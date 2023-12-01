<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
         if(Auth::user()->roles == 'admin'){
            return redirect('/dashboard/admin');
        }elseif (Auth::user()->roles == 'dosen'){
            return redirect('/dashboard/dosen');
        }elseif (Auth::user()->roles == 'mahasiswa'){
            return redirect('/dashboard/mahasiswa');
        }
        
        //return view('dashboard');
    }

    public function admin()
    {
        return view('pages.admin.dashboard');
    }

    public function dosen()
    {
        return view('pages.dosen.dashboard');
    }

    public function mahasiswa()
    {
        return view('pages.mahasiswa.dashboard');
    }
}
