<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
     public function index() {
        $orders = Orders::with('user')->get();
        return view("admin.admin-content.orders.view", compact('orders'));
     }
}
