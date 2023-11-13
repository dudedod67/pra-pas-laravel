<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index(){
        return view("layout.laptop", [
            "laptops"=> Laptop::all()
        ]);
    }

    public function show($id)
    {
        return view('layout.detail_laptop', [
            'laptop' => Laptop::find($id)
        ]);
    }
}
