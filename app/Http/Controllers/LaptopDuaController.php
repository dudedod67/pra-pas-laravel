<?php

namespace App\Http\Controllers;

use App\Models\Laptopkedua;
use Illuminate\Http\Request;

class LaptopDuaController extends Controller
{
    public function index(){
        return view("layout.laptop_dua", [
            "laptops"=> Laptopkedua::all()
        ]);
    }

    public function show($id)
    {
        return view('layout.detail_laptop_dua', [
            'laptop' => Laptopkedua::find($id)
        ]);
    }
}
