<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class HomePendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'pendaftaran' => Pendaftaran::get(),
            'content' => 'home/pendaftaran/index',
        ];
        return view('home.layouts.wrapper', $data);
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'partner_name' => 'required|string|max:255',
            'job_target' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string',
            'photo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'ktp' => 'required|file|mimes:jpeg,png,jpg|max:2048',
            'kk' => 'required|file|mimes:jpeg,png,jpg|max:2048',
            'ijazah' => 'required|file|mimes:jpeg,png,jpg|max:2048',
            'sertifikat_vaksin' => 'required|file|mimes:jpeg,png,jpg|max:2048',
        ]);
        

        $registration = new Pendaftaran($validatedData);

        if ($request->hasFile('photo')) {
            $registration->photo = $request->file('photo')->store('photos', 'public');
        }
        if ($request->hasFile('ktp')) {
            $registration->ktp = $request->file('ktp')->store('ktp', 'public');
        }
        if ($request->hasFile('kk')) {
            $registration->kk = $request->file('kk')->store('kk', 'public');
        }
        if ($request->hasFile('ijazah')) {
            $registration->ijazah = $request->file('ijazah')->store('ijazah', 'public');
        }
        if ($request->hasFile('sertifikat_vaksin')) {
            $registration->sertifikat_vaksin = $request->file('sertifikat_vaksin')->store('vaksin', 'public');
        }

        $registration->save();
        Alert::success('BERHASIL', 'Data Anda Berhasil Di Submit');

        return redirect('/');
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
