<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //user home
    public function userIndex(){
        $offers = Offer::all();
        $orders = Order::all();

        return view('user.index', compact('offers', 'orders'));
    }

    public function adminIndex(){
        return view('admin.index');
    }

    public function animation(){
        return view('animations.animation');
    }

    public function animation_2(){
        return view('animations.animation-2');
    }

    public function animation_3(){
        return view('animations.animation-3');
    }
}
