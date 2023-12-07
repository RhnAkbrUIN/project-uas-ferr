<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Dosen::query();

            return Datatables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                                    type="button" id="action' .  $item->nip . '"
                                        data-toggle="dropdown" 
                                        aria-haspopup="true"
                                        aria-expanded="false">
                                        Aksi
                                </button>
                                <div class="dropdown-menu" aria-labelledby="action' .  $item->nip . '">
                                    <a class="dropdown-item" href="' . route('dosen.edit', $item->nip) . '">
                                        Sunting
                                    </a>
                                    <form action="' . route('dosen.destroy', $item->nip) . '" method="POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>';
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.dosen.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nip' => 'required|unique:dosen',
            'name_dosen' => 'required',
            'jk' => 'required',
            'code_matkul' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        Dosen::create([
            'nip' => $request->nip,
            'name_dosen' => $request->name_dosen,
            'jk' => $request->jk,
            'code_matkul' => $request->code_matkul,
        ]);

        User::create([
            'nip' => $request->nip,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles' => 'dosen',
        ]);

        Alert::success('Data Berhasil ditambahkan!');

        return redirect()->route('dosen.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
