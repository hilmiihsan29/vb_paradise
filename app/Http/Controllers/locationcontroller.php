<?php

namespace App\Http\Controllers;

use App\Models\location;
use Illuminate\Http\Request;

class locationcontroller extends Controller
{
    
    public function index()
    {
        $locations = location::all();
        return response()->json($locations);
    }

    public function show($id)
    {
        $location = location::find($id);

        if ($location) {
            return response()->json($location);
        } else {
            return response()->json(['message' => 'location not found'], 404);
        }
    }
}
