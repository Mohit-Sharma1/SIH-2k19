<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditController extends Controller
{
    // credit request view
    public function showVerification()
    {
        return view('sih_credits.view_requests');
    }
}
