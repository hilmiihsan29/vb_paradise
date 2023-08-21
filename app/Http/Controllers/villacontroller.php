<?php

namespace App\Http\Controllers;

use App\Models\location;
use App\Models\villa;
use Illuminate\Http\Request;

class villacontroller extends Controller
{
    public function index(Request $request)
    {
        $villas = villa::query();

        // Filter dan urutkan berdasarkan price_rate
        $sort_by_price = $request->input('sort_by_price');
        if ($sort_by_price) {
            $price_rate = ($sort_by_price === 'asc') ? 'asc' : 'desc';
            $villas->orderBy('price_rate', $price_rate);
        }
        // Filter dan urutkan berdasarkan jumlah kamar
        $sort_by_rooms = $request->input('sort_by_rooms');
        if ($sort_by_rooms) {
            $total_bedrooms = ($sort_by_rooms === 'asc') ? 'asc' : 'desc';
            $villas->orderBy('total_bedrooms', $total_bedrooms);
        }
        $villas = $villas->get();

        return response()->json(['villas' => $villas]);
    }
    //filter berdasarkan Nama Villa
    public function searchByName(Request $request)
    {
        $name = $request->input('name');

        $villas = villa::where('name', 'like', '%' . $name . '%')->get();

        return response()->json($villas);
    }
    
}
