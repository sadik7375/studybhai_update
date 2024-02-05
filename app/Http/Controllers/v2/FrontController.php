<?php

namespace App\Http\Controllers\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
// ------------------------------ front page ------------------------------

    public function front()
    {
        return view("front.v2.index");
    }

// ------------------------------ front page ------------------------------
}
