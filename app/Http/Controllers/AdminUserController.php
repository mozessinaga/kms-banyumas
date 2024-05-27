<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = User::all();

        $data = [
            'title'   => 'Manajemen User',
            'content' => 'admin/user/index',
            'user'    => $user
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
            'title'   => 'Tambah User',
            'user'    => null,
            'content' => 'admin/user/add'
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
            'name'         => 'required',
            'email'        => 'required|unique:users',
            'password'     => 'required|min:8',
            're_password'  => 'required|same:password',
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);
        Alert::success('Berhasil', 'User Berhasil Dibuat/Ditambahkan', 'Type');
        return redirect('/admin/user');
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
        $data = [
            'title'     => 'Edit User',
            'user'      => User::find($id),
            'content'   => 'admin/user/edit'

        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = User::findOrFail($id);

        $data = $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:8|confirmed',
        ]);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        } else {
            unset($data['password']); // Fungsi untuk tidak meng-update password apabila kolom password dikosongkan
        }

        $user->update($data);

        Alert::success('Edit User', 'User Berhasil Diupdate', 'Type');
        return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::find($id);
        $user->delete();
        Alert::success('Edit User', 'User Berhasil Dihapus', 'Type');
        return redirect('/admin/user');
    }
}
