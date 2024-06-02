<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class HomeBannerController extends Controller
{
    //
    function index()
    {
        $data = [
            'bannerjob' => Banner::get(),
            'content' => 'home/joborder/index',
        ];
        return view('home.layouts.wrapper', $data);

    }

    public function show(string $id)
    {
        //
        $data = [
            'bannerjob'      => Banner::find($id),
            'content'   => 'home/joborder/show'

        ];
        return view('home.layouts.wrapper', $data);
    }
}
