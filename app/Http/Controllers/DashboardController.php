<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Gate;
class DashboardController extends Controller
{
    public function index(Request $request){
        $user = Auth::guard('web')->user();
        if(!empty($user->marketcenters)){
            dd($user->marketcenters);
        } else {
            echo 'agent';
        }
    }

    public function test($id=null){
        $user = Auth::guard('web')->user();
        if(!$id){
            $id=$user->kwuid;
        }
        if(Gate::denies('view-dash',$id)){
            abort(403);
        }
        dd('can view');
    }
}
