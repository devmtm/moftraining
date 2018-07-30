<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class WelcomeController extends Controller
{
    public function index() {
		$orders = Order::get();
		dd($orders);
		$order = new Order();
		$order->name = 'Order 3';
		$order->save();
		return view('welcome');
	}
}
