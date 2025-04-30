<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function luxury_delivery()
    {
        return view('pages.luxury-delivery');
    }

    public function about()
    {
        return view('pages.about');
    }
}
