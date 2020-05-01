<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\TravelPackage;
use App\TransactionDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $items = Transaction::with(['details', 'travel_package', 'user'])->findOrFail($id);

        $data = [
            'items' => $items
        ];
        
        return view('pages.checkout', $data);
    }

    public function process(Request $request, $id)
    {
        $travel = TravelPackage::findOrFail($id);
        $transaction = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'additional_visa' => 0,
            'total' => $travel->price,
            'status' => 'IN_CART' 
        ]);

        $transdetail = TransactionDetail::create([
            'transaction_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'is_visa' => false,
            'doe_passport' => Carbon::now()->addYears(5)
        ]);
        
        return redirect()->route('checkout', $transaction->id);
    }

    public function remove(Request $request, $detail_id)
    {
        $transdetail = TransactionDetail::findOrFail($detail_id);
        $transaction = Transaction::with(['details', 'travel_package'])->findOrFail($transdetail->transaction_id);
        
        if($transdetail->is_visa)
        {
            $transaction->total -= 190;
            $transaction->additional_visa -= 190;
        }

        $transaction->total -= $transaction->travel_package->price;
        $transaction->save();
        $transdetail->delete();

        return redirect()->route('checkout', $transdetail->transaction_id);
    }

    public function create(Request $request, $detail_id)
    {
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required'
        ]);

        $data = $request->all();
        $data['transaction_id'] = $detail_id;

        TransactionDetail::create($data);
        $transaction = Transaction::with(['travel_package'])->find($detail_id);

        if($request->is_visa)
        {
            $transaction->total += 190;
            $transaction->additional_visa += 190;
        }

        $transaction->total += $transaction->travel_package->price;
        $transaction->save();
        
        return redirect()->route('checkout', $detail_id);
    }

    public function success(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);

        $transaction->status = 'PENDING';
        $transaction->save();
        
        return view('pages.success');
    }
}
