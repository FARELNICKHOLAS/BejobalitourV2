<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourPackages;

class TourController extends Controller
{
    public function index()
    {
        $packages = TourPackages::all();
        return view('destination', compact('packages'));
    }

    public function show($slug)
    {
        $package = TourPackages::where('slug', $slug)->firstOrFail();
        return view('showpackages', compact('package'));
    }
}
