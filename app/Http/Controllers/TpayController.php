<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Order;
use  App\Models\Booking;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

class TpayController extends Controller 
{
    public function selectBank($id)
    {
        $id_order = $id;

        return view('bankinGroups', ['id_order' => $id_order]);
    }

    public function create(Request $request)
    {
        $id_order = $request->input('id');
        $order = Order::find($id_order);
        $amount = $order->amount;
        $config = array(
            
            'amount' => $amount,
            'description' => 'zamówienie nr '.$id_order,
            'crc' => $id_order,
            'name' => 'test',
            'group' => (int)$request->input('group'),
            'result_url' => 'https://shop.tpay.com/shop-endpoint'.$id_order,
            'result_email' => 'shop@example.com',
            'return_url' => 'http://127.0.0.1:8000/orderpaid/'.$id_order,
            'email' => 'customer@example.com',
            'accept_tos' => 1,
        );

        $test = new TransactionService();
        
        $transaction = $test->createTransaction($config);
        if(gettype($transaction) == 'string'){
            $order->status = 2;
            $order->update();
            return Redirect::to($transaction ); 
        } else {
            // Log::useDailyFiles(storage_path().'/logs/tpay.log');
            // Log::error('Tranzakcja nieudana. Błędne dane.',[$id_order] );
            return back();
        };
    }
    public function orderPaid($id)
    {   $order = Order::find($id);
        $booking = Booking::where('id_order', $id)->first();
        if($booking){
            $addOrder = 'true';
            $name = $booking->name;
            $date = $booking->order_date;
            $countOfPeople = $booking->count_of_people;
            $time = $booking->time;
        } 
        if($order->status == 2) {
            $order->status = 3;
            $readyTime = Carbon::createFromTime(Carbon::now()->setTimezone('Europe/Warsaw')->hour,Carbon::now()->minute,)->addHour()->format('H:i');
            $amount = '0';
            return view('ordersaved', get_defined_vars());
        } else {

            return redirect()->route('home');
        }
    }
}