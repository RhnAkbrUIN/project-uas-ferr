<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index(){

        $matkul = Matakuliah::all();

        return view('pages.admin.matakuliah.index', compact('matkul'));
    }
}
