<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    function index()
    {
        $data = [
            'pesan' => Pesan::count(),
            'bannerjob' => Banner::count(),
            //'formulir' => Formulir::count(),
            'user' => User::count(),
            'content'   => 'admin/dashboard/index'
        ];

        return view('admin.layouts.wrapper', $data);
    }
}
