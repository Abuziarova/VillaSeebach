<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Menu;
use Validator;
use Storage;
use File;

class MenuController extends Controller
{
    public function renderMenuPage()
    {
        $soups = Menu::where('group', 'soup')->get();
        $mainDishes = Menu::where('group', 'mainDish')->get();
        $salads = Menu::where('group', 'salad')->get();
        $desserts = Menu::where('group', 'dessert')->get();
        return view('menu', get_defined_vars());
    }

    public function addMenu(Request $request)
    {
        $input = [
            'title'   => $request->input('title'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'group' => $request->input('group'),
            'image' => $request->file('image')
             ];
        $rules = [
                    'title'   => 'required|unique:App\Models\menu,title',
                    'price' => 'required',
                    'description' => 'required|min:8',
                    'group' => 'required',
                    'image'=> 'sometimes|nullable|mimes:jpeg,jpg,png,svg'
                    ];
        $messages = [
                        'required' => 'pole jest wymagane',
                        'unique'  => 'nazwa już była użyta',
                        'min' => 'pole musi zawerać conajmniej 8 znaków',
                        'mimes' => 'zły format pliku'
                        ];
        $validator = Validator::make($input, $rules, $messages);
         
        $errorMessages = $validator->errors()->messages();
            
        if (!empty($errorMessages)) {

            return response()->json(['success' => 'false', 'message' =>  $errorMessages]);
        } else {
            $itemMenu = new Menu();
            $itemMenu->title =$input['title'];
            $itemMenu->price = $input['price'];
            $itemMenu->description = $input['description'];
            $itemMenu->group = $input['group'];
            if(!is_null($input['image'])){
                $name = strtolower(str_replace(' ', '_', $input['title']));
                $itemMenu->image =  $request->file('image')->storeAs('menu_images', $name. '.' .  $request->file('image')->extension(), 'public' );
            };
            $itemMenu->save();
    
            return response()->json(['success' => 'true', 'message' => 'Wpis został dodany']);
        }
       
    }

    public function updateMenu(Request $request)
    {
        $UpdateItem = Menu::find($request->input('id'));
        $UpdateItem->title = $request->input('title');
        $UpdateItem->price = $request->input('price');
        $UpdateItem->description = $request->input('description');
        $UpdateItem->group = $request->input('group');
        $UpdateItem->save();

        return redirect('/menu');
    }
}
