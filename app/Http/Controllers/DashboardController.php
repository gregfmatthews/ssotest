<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class DashboardController extends Controller
{
    public function index(Request $request){
        $user = Auth::guard('web')->user();
        dd($user);
    }

    public function test(){
        die('test');
    }
}
