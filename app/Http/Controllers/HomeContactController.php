<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeContactController extends Controller
{
    //
    function index() {
        $data = [
            'content' => 'home/contact/index'
        ];
        //return view('home.index');
        return view('home.layouts.wrapper', $data);
    }

    function send(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'desc' => 'required',

        ]);

        Pesan::create($data);
        Alert::success('Berhasil', 'Pesan Anda Berhasil Dikirim');
        return redirect('/contact');
    }
}
