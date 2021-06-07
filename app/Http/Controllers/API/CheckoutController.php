<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\CheckoutRequest;
use Illuminate\Http\Request;
use App\TravelPackage;
use App\Transaction;
use App\TransactionDetail;

class CheckoutController extends Controller
{
    public function checkout(CheckoutRequest $request) {
        $data = $request->except(['username', 'nationality', 'is_visa', 'doe_passport']);
        // $data = $request->all();
        
        $transaction = Transaction::create($data);

        $i = 0;
        foreach($request->username as $packages) {
            $detail[] = new TransactionDetail([
                'transaction_id' => $transaction->id,
                'username' => $request->username[$i],
                'nationality' => $request->nationality[$i],
                'is_visa' => $request->is_visa[$i],
                'doe_passport' => $request->doe_passport[$i],
            ]);
            
            $i++;
        }

        $transaction->details()->saveMany($detail);

        return ResponseFormatter::success($transaction);
    }
}
