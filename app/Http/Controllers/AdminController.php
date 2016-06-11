<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function index(){
        if (Gate::denies('update-post',Auth::user())) {
            abort(403);
        }
        return view('admin.index');
    }

    public function setGoal(){
        return view('admin.goal');
    }
}
