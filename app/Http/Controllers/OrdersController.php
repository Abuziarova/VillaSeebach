<?php

namespace App\Http\Controllers;

use  App\Models\Menu;
use  App\Models\Order;
use  App\Models\OrdersDetails;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrdersController extends Controller 
{
    public function createOrder($booking=false)
    {
        $soups = Menu::where('group', 'soup')->where('isActive', '1')->get();
        $mainDishes = Menu::where('group', 'mainDish')->where('isActive', '1')->get();
        $salads = Menu::where('group', 'salad')->where('isActive', '1')->get();
        $desserts = Menu::where('group', 'dessert')->where('isActive', '1')->get();
        $booking = $booking;
        return view('orders', get_defined_vars());
    }

     public function saveOrder(Request $request) 
    { 
        $amount = 0;
        $order_products = [];
        foreach($request->input() as $id => $count){
            if($id != "_token" && $id != "payment" && !is_null($count) ){
                $price = Menu::find($id)->price;
                $amount += $price * $count;
                $order_products[$id] = $count;
            }
        };
        $order = new Order;
        $order->order_date = Carbon::now()->toDateTimeString();
        $order->amount = $amount;
        $order->status = 1;
        $order->payment = $request->input('payment') == 'cache' ? 1 : 2;
        $order->save();
        $orderId = $order->id;
        foreach($order_products as $id => $count) {
            $orders_product = new OrdersDetails;
            $orders_product->order_id = $orderId;
            $orders_product->product_id  = $id;
            $orders_product->quantity = $count;
            $orders_product->price = Menu::find($id)->price;
            $orders_product->save();
        }

        if($request->input('payment') == 'cache'){
            $end_time = Carbon::createFromTime(Carbon::now()->hour,Carbon::now()->minute,'Europe/Warsaw')->format('H:i');
            return view('ordersaved', ['readyTime' => $end_time, 'amount' => $amount]);
        } else {
            return redirect()->route('tpay', ['id' =>  $orderId]);
        }
    }

}