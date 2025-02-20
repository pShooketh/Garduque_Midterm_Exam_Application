<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Naruto Action Figure', 'price' => 29.99, 'image' => 'naruto.jpg'],
            ['name' => 'One Piece Mug', 'price' => 15.50, 'image' => 'onepiece.jpg'],
            ['name' => 'Attack on Titan Hoodie', 'price' => 45.00, 'image' => 'aot.jpg'],
        ];

        return view('products.index',compact('products'));
    }
    //
}
