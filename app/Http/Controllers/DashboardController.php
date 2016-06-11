<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class DashboardController extends Controller
{
    public function index(Request $request){
        dd($user = Auth::user());
    }
}
