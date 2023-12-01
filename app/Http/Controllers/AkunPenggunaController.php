<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunPenggunaController extends Controller
{
    public function index(){
        return view('pages.admin.akun-pengguna.index');
    }
}
