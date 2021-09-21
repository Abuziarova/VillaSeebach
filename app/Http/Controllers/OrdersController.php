<?php

namespace App\Http\Controllers;

use  App\Models\Menu;
use Illuminate\Http\Request;

class OrdersController extends Controller 
{
    public function createOrder()
    {
        $soups = Menu::where('group', 'soup')->where('isActive', '1')->get();
        $mainDishes = Menu::where('group', 'mainDish')->where('isActive', '1')->get();
        $salads = Menu::where('group', 'salad')->where('isActive', '1')->get();
        $desserts = Menu::where('group', 'dessert')->where('isActive', '1')->get();
        
        return view('orders', get_defined_vars());
    }
     public function saveOrder(Request $request) 
    {
        dd($request->input());
    }
}