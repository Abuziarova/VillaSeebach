<?php

namespace App\Http\Controllers;

use tpayLibs\src\_class_tpay\TransactionApi;
use tpayLibs\src\_class_tpay\Utilities\TException;
use Illuminate\Support\Facades\Log;

class TransactionService extends TransactionApi {

    public function __construct()
    {
        $this->merchantSecret = 'x#x*mKj0xf2^%gg8';
        $this->merchantId = 1010;
        $this->trApiKey = 'd312f432bea82257dccdece96770dd433a58afaf';
        $this->trApiPass = 'Kupakonia123';
        parent::__construct();
    }

    
    public function createTransaction($config)
    {
        try {
            $res = $this->create($config);
            $this->trId = $res['title'];
            $link = 'https://secure.tpay.com/?gtitle=' . $this->trId;
            return $link;
        } catch (TException $e) {
            // Log::useDailyFiles(storage_path().'/logs/tpay.log');
            // Log::error($e->getMessage());

            dd($e);
        }
        
    }

}
