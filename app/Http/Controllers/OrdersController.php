<?php

namespace App\Http\Controllers;

use  App\Models\Menu;
use  App\Models\Order;
use  App\Models\OrdersDetails;
use  App\Models\Booking;
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
        $today = Carbon::now()->toDateString();
        $times = $this->renderFreeTime($today);
        
        return view('orders', get_defined_vars());
    }

     public function saveOrder(Request $request) 
    {
        $amount = 0;
        $order_products = [];
        foreach($request->input() as $id => $count){
            if(gettype($id) == 'integer' && !is_null($count) ){
                $price = Menu::find($id)->price;
                $amount += $price * $count;
                $order_products[$id] = $count;
            }
        };
        $order = new Order;
        $order->order_date = Carbon::now()->addHour(2)->toDateTimeString();
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
        };
        $addOrder = $request->input('addOrder');
        if($addOrder) {
            $name = $request->input('name');
            $date = $request->input('date');
            $countOfPeople = $request->input('countOfPeople');
            $phone = $request->input('phone');
            $time = $request->input('time');
            $this->saveBooking($name, $date, $countOfPeople, $phone, $time, $orderId);
        }

        if($request->input('payment') == 'cache'){

            $readyTime = Carbon::createFromTime(Carbon::now()->addHour(3)->hour,Carbon::now()->minute,'Europe/Warsaw')->format('H:i');
            return view('ordersaved', get_defined_vars());
        } else {
            return redirect()->route('tpay', ['id' =>  $orderId]);
        }
    }

    public function saveBooking($name, $date, $people, $phone, $time, $id_order=null)
    {
        $booking = new Booking;
        $booking->name = $name;
        $booking->order_date = $date;
        $booking->count_of_people = $people;
        $booking->phone = $phone;
        $booking->time = $time;
        $booking->id_order = $id_order;
        $saved = $booking->save();
        if($saved){
            return true;
        }
    }

    public function renderFreeTime($date){
        $hour = 12;
        $minutes = 0;
        $now_time = Carbon::now()->addHour(2)->toTimeString();
        $resercedTimes = Booking::where('order_date', $date)->pluck('time')->toArray();
        $today = Carbon::now()->toDateString();
        $times = [];
        for($i=0; $i<17; $i++){
            $time = $hour.":".$minutes.'0';
            if( !in_array( $time  ,$resercedTimes ) )
            { 
                if( !($date == $today && $time < $now_time) ){
                    $times[]=$time;
                }
            }
            $minutes += 3;
            if($minutes == 6){
                $minutes = 0;
                $hour++;
            } ;
        } 
        return $times;
    }

    public function beforeSaveBooking(Request $request){
        $name = $request->name;
        $date = $request->date;
        $countOfPeople = $request->countOfPeople;
        $phone = $request->phone;
        $time = $request->time;
        $newBooking = $this->saveBooking($name, $date, $countOfPeople, $phone, $time);
        if($newBooking){

            return response()->json(['success' => 'true', 'message' => 'Rezerwacja została zapisana na '.$name.'. Data: '.$date.', godzina: '.$time.', liczba osób: '.$countOfPeople.'']); 
        } else {

            return response()->json(['success' => 'false', 'message' => 'Coś poszło nie tak']);
        }
     }

     public function changeDay(Request $request)
     {
           $times = $this->renderFreeTime($request->day);
           if($times){
            return response()->json(['success' => 'true', 'times' => $times]);
           } else {
            return response()->json(['success' => 'false', 'message' => 'Coś poszło nie tak']);
           }
     }
}