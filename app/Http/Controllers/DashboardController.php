<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;


// class DashboardController extends Controller
// {
//     public function main (){
//         return view('layouts.main');
//     }
// }

use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        return view('dashboard.layouts.main');
    }
}

