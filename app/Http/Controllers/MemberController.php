<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function cart(){
        return view ('frontend.cart');
    }   
    public function checkout(){
        return view ('frontend.checkout');
    }   
    public function detail(){
        return view ('frontend.detail');
    }   
    public function product(){
        return view ('frontend.product');
    }   
}
