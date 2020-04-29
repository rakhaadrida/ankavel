<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TravelPackage;

class DetailsController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = TravelPackage::with(['gallery'])->where('slug', $slug)->firstorFail();

        $data = [
            'item' => $item
        ];
        
        return view('pages.details', $data);
    }
}
