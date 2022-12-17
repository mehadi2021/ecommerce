<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function cont()
    {
        return view('contract');
    }
     public function view()
    {
        $orders=Order::with('customer')->paginate(15);
        return view('admin.dailyorder',compact('orders'));
    }


}