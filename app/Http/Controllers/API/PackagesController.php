<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TravelPackage;

class PackagesController extends Controller
{
    public function all(Request $request) {
        $id = $request->input('id');
        $limit = $request->input('limit', 5);
        $title = $request->input('title');
        $slug = $request->input('slug');
        $location = $request->input('location');
        $type = $request->input('type');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');

        // Data unique atau cuma 1
        if($id) {
            $packages = TravelPackage::with(['gallery'])->find($id);

            if($packages)
                return ResponseFormatter::success($packages, 'Data Produk Berhasil Diambil');
            else
                return ResponseFormatter::error(null, 'Data Produk Tidak Ada', 404);
        }

        if($slug) {
            $packages = TravelPackage::with(['gallery'])->where('slug', $slug)->first();

            if($packages)
                return ResponseFormatter::success($packages, 'Data Produk Berhasil Diambil');
            else
                return ResponseFormatter::error(null, 'Data Produk Tidak Ada', 404);
        }

        $packages = TravelPackage::with(['gallery']);

        // Data lebih dari satu
        if($title)
            $packages->where('title', 'like', '%'.$title.'%');

        if($location)
            $packages->where('location', 'like', '%'.$location.'%');

        if($type)
            $packages->where('type', 'like', '%'.$type.'%');
        
        if($price_from)
            $packages->where('price', '>=', $price_from);

        if($price_to)
            $packages->where('price', '<=', $price_to);

        return ResponseFormatter::success(
            $packages->paginate($limit), 'Data Produk Berhasil Diambil'
        );
    }
}
