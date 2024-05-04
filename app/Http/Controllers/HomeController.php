<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $food = Food::all();
        return view('home',compact('food'));
    }
    public function redirects()
    {
        $usertype = Auth::user()->usertype;
        if($usertype=='1'){
            return view('admin/homeadmin');
        }else{
            return view('home');
        }
        
    }
}
