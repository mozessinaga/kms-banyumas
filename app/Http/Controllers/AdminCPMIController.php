<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminCPMIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cpmi = Pendaftaran::all();

        $data = [
            'title'   => 'CPMI Masuk',
            'content' => 'admin/cpmi/index',
            'cpmi'    => Pendaftaran::get(),
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
        $data = [
            'title'     => 'Data CPMI',
            'cpmi'      => Pendaftaran::find($id),
            'content'   => 'admin/cpmi/show'

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
        $cpmi = Pendaftaran::find($id);

        if (!$cpmi) {
            return redirect()->back()->with('error', 'Data not found');
        }

        // Delete the associated files from storage
        if ($cpmi->photo) {
            Storage::disk('public')->delete($cpmi->photo);
        }
        if ($cpmi->ktp) {
            Storage::disk('public')->delete($cpmi->ktp);
        }
        if ($cpmi->kk) {
            Storage::disk('public')->delete($cpmi->kk);
        }
        if ($cpmi->ijazah) {
            Storage::disk('public')->delete($cpmi->ijazah);
        }
        if ($cpmi->sertifikat_vaksin) {
            Storage::disk('public')->delete($cpmi->sertifikat_vaksin);
        }

        // Delete the entry from the database
        $cpmi->delete();
        Alert::success('BERHASIL', 'Peserta Berhasil Dihapus');
        return redirect('/admin/cpmi');
    }
}
