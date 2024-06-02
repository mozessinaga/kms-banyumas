<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $bannerjob = Banner::all();

        $data = [
            'title'   => 'Manajemen Job Order',
            'content' => 'admin/bannerjob/index',
            'bannerjob'    => Banner::get(),
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'title'   => 'Tambah Job Order',
            'bannerjob'    => null,
            'content' => 'admin/bannerjob/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());
        $data = $request->validate([
            'title'         => 'required',
            'body'        => 'required',
            'cover'     => 'required',
        ]);

        //Upload Gambar
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $file_name = time() . '-' . $cover->getClientOriginalName();

            $storage = 'uploads/bannerjob/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage . $file_name;
        }else{
            $data['cover'] = null;
        }

        Banner::create($data);
        Alert::success('BERHASIL', 'Job Order Berhasil Dibuat/Ditambahkan', 'Type');
        return redirect('/admin/bannerjob');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = [
            'title'     => 'Informasi Job Order',
            'bannerjob'      => Banner::find($id),
            'content'   => 'admin/bannerjob/show'

        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = [
            'title'     => 'Edit Banner',
            'bannerjob'      => Banner::find($id),
            'content'   => 'admin/bannerjob/edit'

        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    // Temukan banner yang sesuai
    $banner = Banner::findOrFail($id);

    // Validasi data yang diterima
    $data = $request->validate([
        'title' => 'required',
        'body'  => 'required',
        // Gambar tidak wajib diisi
        'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    // Jika ada file gambar yang diunggah
    if ($request->hasFile('cover')) {
        // Hapus file gambar lama jika ada
        if ($banner->cover) {
            $file_path = public_path($banner->cover);
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }

        // Unggah file gambar baru
        $cover = $request->file('cover');
        $file_name = time() . '-' . $cover->getClientOriginalName();
        $storage = 'uploads/bannerjob/';
        $cover->move($storage, $file_name);
        $data['cover'] = $storage . $file_name;
    } else {
        // Pertahankan gambar lama
        $data['cover'] = $banner->cover;
    }

    // Update data banner
    $banner->update($data);

    // Tampilkan pesan sukses
    Alert::success('BERHASIL', 'Job Order Berhasil Diubah');

    // Redirect ke halaman yang sesuai
    return redirect('/admin/bannerjob');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $bannerjob = Banner::findOrFail($id);

        // Hapus file cover/gambar jika ada
        if ($bannerjob->cover != null) {
            $file_path = public_path($bannerjob->cover);
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
    
        $bannerjob->delete();
    
        Alert::success('BERHASIL', 'Job Order Berhasil Dihapus');
    
        return redirect('/admin/bannerjob');
    }
}
