<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingsController extends Controller
{
    public function master() {
        $listings = Listing::all();
        return view('master', compact('listings'));
    }
}
