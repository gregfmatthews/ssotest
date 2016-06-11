<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class DashboardController extends Controller
{
    public function index(Request $request){
        $user = Auth::guard('web')->user();
        if(!empty($user->attributes->marketcenters)){
            dd($user->attributes->marketcenters);
        } else {
            echo 'agent';
        }
    }

    public function test(){
        die('test');
    }
}
