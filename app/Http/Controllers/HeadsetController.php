<?php

namespace App\Http\Controllers;

use App\Models\Headset;
use Illuminate\Http\Request;

class HeadsetController extends Controller
{
    public function index(){
        return view("layout.headset", [
            "headsets"=> Headset::all()
        ]);
    }

    public function show($id)
    {
        return view('layout.detail_headset', [
            'headset' => Headset::find($id)
        ]);
    }
}
