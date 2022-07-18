<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //user home
    public function usersIndex(){
        $offers = array(
            "https://graphicriver.img.customer.envatousercontent.com/files/303885560/preview.jpg?auto=compress%2Cformat&q=80&fit=crop&crop=top&max-h=8000&max-w=590&s=109f737a5385b38ec8d0a5048ef3fee3",
            "https://img.freepik.com/premium-vector/special-offer-sale-poster-design-with-30-discount-offer-leaves-abstract-background_1302-21886.jpg",
            "https://i.pinimg.com/474x/d1/cf/d7/d1cfd726f334ebbfca08ab29975e1942.jpg"
        );
        // dd($offers);
        return view('user.index', compact('offers'));
    }

    public function userIndex(){
        $offers = Offer::all();
        $orders = Order::all();

        return view('user.index', compact('offers', 'orders'));
    }

    public function adminIndex(){
        return view('admin.index');
    }
}
