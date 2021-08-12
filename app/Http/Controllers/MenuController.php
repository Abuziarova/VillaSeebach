<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function renderMenuPage(){
        $db = \DB::connection();
        return view('menu');
    }
}
