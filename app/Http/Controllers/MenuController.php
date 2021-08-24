<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Menu;
use Validator;

class MenuController extends Controller
{
    public function renderMenuPage(){
        $soups = Menu::where('group', 'soup')->get();
        $mainDishes = Menu::where('group', 'mainDish')->get();
        $salads = Menu::where('group', 'salad')->get();
        $desserts = Menu::where('group', 'dessert')->get();
        return view('menu', get_defined_vars());
    }
    public function addMenu(Request $request){
       
        $input = [
            'title'   => $request->input('title'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'group' => $request->input('group')
             ];
        $rules = [
                    'title'   => 'required|unique:App\Models\menu,title',
                    'price' => 'required',
                    'description' => 'required|min:8',
                    'group' => 'required'
                    ];
        $messages = [
                        'required' => 'pole jest wymagane',
                        'unique'  => 'nazwa już była użyta',
                        'min' => 'pole musi zawerać conajmniej 8 znaków'
                        ];
        $validator = Validator::make($input, $rules, $messages);
         
        $errorMessages = $validator->errors()->messages();
            
        if ( !empty($errorMessages)){
            
            return response()->json(['success' => 'false', 'message' =>  $errorMessages]);
            
        }else {
        
            $itemMenu = new Menu();
            $itemMenu->title =$input['title'];
            $itemMenu->price = $input['price'];
            $itemMenu->description = $input['description'];
            $itemMenu->group = request()->group;
            $itemMenu->save();
    
            return response()->json(['success' => 'true', 'message' => 'Wpis został dodany']);
        }
       
    }
}
