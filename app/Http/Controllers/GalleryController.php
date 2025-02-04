<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $imagePath = public_path('image/gallery');
        $images = array_diff(scandir($imagePath), ['.', '..']);
        shuffle($images);

        return view('gallery', compact('images'));
    }
}
