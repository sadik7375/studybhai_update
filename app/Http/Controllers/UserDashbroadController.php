<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use Illuminate\Support\Facades\Auth;
class UserDashbroadController extends Controller
{

    //---------------show number of paid courses------------
public  function showinfo()
{
    $user=Auth::user();

    //-------------------number of course order------------------
    $processingOrders=$user->orders()->where('status','Processing');

    $totalOrders=$processingOrders->count();


    //-------------------total amount------------------------------

    $totalAmount=$processingOrders->sum('amount');


    return view('userprofile.userprofile',compact('totalOrders','totalAmount'));


}







}
