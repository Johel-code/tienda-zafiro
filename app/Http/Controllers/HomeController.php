<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    public function index(Request $request){
        if(auth()->check()){
            if(auth()->user()->role_id == 2 || auth()->user()->role_id == null){
                return view('index-ventas');
            }else{
                return view('index-products');
            }
        }   
    }
}
