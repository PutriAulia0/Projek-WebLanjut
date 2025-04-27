<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        1 => ['name' => 'Kaos Erigo', 'price' => 150000 ],
        2 => ['name' => 'Kaos Bloods', 'price' => 250000 ],
        3 => ['name' => 'Kaos 3second', 'price' => 500000 ],
    ];
    //Menampilkan daftar produk
    public function index()
    {
        $products = $this->products;
        return view('products.index', compact('products'));
    }
    
}
