<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminPesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Pesan',
            'pesan' => Pesan::orderBy('created_at', 'desc')->get(),
            'content' => 'admin/pesan/index',

        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $pesan = Pesan::find($id);
        $pesan->is_read = 1;
        $pesan->save();

        $data = [
            'title' => 'Manajemen Pesan',
            'pesan' => $pesan,
            'content' => 'admin/pesan/show',

        ];
        return view('admin.layouts.wrapper', $data);
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
        $pesan = Pesan::findOrFail($id);

    
        $pesan->delete();
    
        Alert::success('BERHASIL', 'Pesan Berhasil Dihapus');
    
        return redirect('/admin/pesan');
    }
}
