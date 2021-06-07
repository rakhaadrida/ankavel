<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller
{
    public function get(Request $request, $id) {
        $packages = Transaction::with(['details'])->find($id);

        if($packages)
            return ResponseFormatter::success($packages, 'Data Transaksi berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data Transaksi tidak ada', 404);
    }
}
