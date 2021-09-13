<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   public function renderHomePage()
   {
      return view('index');
   }

   public function login(Request $request)
   {
      $login = $request->input('login');
      $user = User::where('email', $login)->first();
      if($user){
         $pass =  $request->input('password');
         if(password_verify($pass, $user->password)){
            Auth::login($user);
            return response()->json(['success' => 'true', 'message' =>  'Logowanie do systemu powiodło się']);
         } else {
            return response()->json(['success' => 'false', 'message' =>  'Hasło jest niepoprawne']);
         }
      } else {
         return response()->json(['success' => 'false', 'message' =>  'Nie istnieje użytkownika o podanym loginie']);
      };
   }

   public function logout()
   {
      Auth::logout();
      return back();
   }

}
