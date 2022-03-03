<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'title' => 'Home',
            'active' => 'home',
            'barang' => Barang::all()
        ]);
    }

    public function show()
    {
        return view('home.product', [
            'title' => 'Detail',
            'active' => 'home',
            'barang' => Barang::all()
        ]);
    }
}
