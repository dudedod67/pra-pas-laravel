<?php

namespace App\Http\Controllers;

use App\Models\Handphone;
use App\Models\Laptopkedua;
use Illuminate\Http\Request;

class HandphoneController extends Controller
{
    public function index(){
        return view("layout.handphone", [
            "handphones"=> Handphone::all()
        ]);
    }

    public function show($id)
    {
        return view('layout.detail_handphone', [
            'handphone' => Handphone::find($id)
        ]);
    }
}
