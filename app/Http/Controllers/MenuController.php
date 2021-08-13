<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Menu;

class MenuController extends Controller
{
    public function renderMenuPage(){
        $soups = Menu::where('group', 'soup')->get();
        $mainDishes = Menu::where('group', 'main dish')->get();
        $salads = Menu::where('group', 'salad')->get();
        $desserts = Menu::where('group', 'dessert')->get();
        return view('menu', get_defined_vars());
    }
}
