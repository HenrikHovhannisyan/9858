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

    public function shop()
    {
        return view('pages.shop');
    }

    public function custom_packaging()
    {
        return view('pages.custom-packaging');
    }

    public function concierge_service()
    {
        return view('pages.concierge-service');
    }
}
