<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user()
    {
        $data = user::all();
        return view('admin.users',compact('data'));
    }
    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function foodmenu()
    {
        $data = Food::all();
        return view('admin.foodmenu',compact('data'));
    }
    public function addfood()
    {
        return view('admin.foodadd');
    }
    public function insertfood(Request $request)
    {
        $data = new Food;
        $image = $request->image;
        $image_name = time().'_'.$image->getClientOriginalExtension();
        $request->image->move('food',$image_name);
        $data->image = $image_name;
        $data->name = $request->name;
        $data->price = $request->price;
        $data->title = $request->title;
        $data->save();
        return redirect()->back();
    }
    public function deletefood($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }
}
