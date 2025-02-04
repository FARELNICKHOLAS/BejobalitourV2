<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourBooking;

class BookController extends Controller
{
    public function create()
    {
        return view('home'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'tour_start' => 'required|date',
            'tour_end' => 'required|date',
            'number_of_people' => 'required|integer|min:1',
            'special_requests' => 'nullable|string',
        ]);

        TourBooking::create($request->all());

        return redirect()->route('home')->with('success', 'Your tour has been booked successfully!');
    }
}