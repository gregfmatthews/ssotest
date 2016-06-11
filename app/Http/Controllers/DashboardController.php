<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class DashboardController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        dd($user);
    }
}
