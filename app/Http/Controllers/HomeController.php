<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }
    public function shop()
    {
       return view('frontend.shop'); 
    }
    public function detail($id)
    {
        return view('frontend.detail');
    }
    public function cart()
    {
        return view('frontend.cart');
    }
    public function myOrder()
    {
        return view('frontend.order');
    }
    public function orderHistory()
    {
        return view('frontend.order-history');
    }
    public function checkout()
    {
        return view('frontend.checkout');
    }
}
