<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function product()
    {
        return view('pages.product');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function termsCondition()
    {
        return view('pages.terms-condition');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }
}

