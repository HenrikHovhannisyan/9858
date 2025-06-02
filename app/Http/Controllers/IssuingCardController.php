<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Issuing\Card;
use Stripe\Issuing\Cardholder;

class IssuingCardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(Request $request)
    {
        $request->validate([
            'cardholder' => 'required|string',
        ]);
        Stripe::setApiKey(Config::get('stripe.secret_key'));
        try {
            $card = Card::create([
                'cardholder' => $request->input('cardholder'),
                'currency' => 'usd',
                'type' => 'virtual',
            ]);
            // Save the card to the database
            $user = Auth::user();
            $virtualCard = new \App\Models\VirtualCard();
            $virtualCard->user_id = $user->id;
            $virtualCard->stripe_card_id = $card->id;
            $virtualCard->last4 = $card->last4;
            $virtualCard->exp_month = $card->exp_month;
            $virtualCard->exp_year = $card->exp_year;
            $virtualCard->cardholder_name = $card->cardholder->name ?? $request->input('cardholder');
            $virtualCard->brand = $card->brand;
            $virtualCard->save();
            return redirect()->route('my_card')->with('success', 'Virtual card created successfully!');
        } catch (\Exception $e) {
            return redirect()->route('my_card')->with('error', 'Error creating card: ' . $e->getMessage());
        }
    }
    public function createCardholder(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'billing' => 'required|array',
            'billing.address' => 'required|array',
            'billing.address.line1' => 'required|string',
            'billing.address.city' => 'required|string',
            'billing.address.state' => 'required|string',
            'billing.address.country' => 'required|string',
            'billing.address.postal_code' => 'required|string',
        ]);
        Stripe::setApiKey(Config::get('stripe.secret_key'));
        try {
            $cardholder = Cardholder::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone_number' => $request->input('phone_number'),
                'type' => 'individual',
                'billing' => [
                    'address' => $request->input('billing.address'),
                ],
            ]);
            return response()->json(['success' => true, 'cardholder' => $cardholder]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
    // Add a method to retrieve card details (number, cvv, type) for the view
    public function showCardDetails()
    {
        Stripe::setApiKey(Config::get('stripe.secret_key'));
        $user = Auth::user();
        $virtualCard = \App\Models\VirtualCard::where('user_id', $user->id)->latest()->first();
        $cardDetails = null;
        $issuingBalance = null;
        if ($virtualCard) {
            try {
                $card = Card::retrieve($virtualCard->stripe_card_id);
                $balance = \Stripe\Balance::retrieve();
                $issuingBalance = isset($balance->issuing) ? $balance->issuing : null;
                $cardDetails = [
                    'brand' => $card->brand,
                    'last4' => $card->last4,
                    'exp_month' => $card->exp_month,
                    'exp_year' => $card->exp_year,
                    'type' => $card->type,
                    'cardholder_name' => $card->cardholder->name ?? '',
                ];
            } catch (\Exception $e) {
                $cardDetails = null;
            }
        }
        return view('pages/dashboard/virtual-card', compact('cardDetails', 'user', 'issuingBalance'));
    }
}
