<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// package
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

// models
use App\Models\Tags;

class ProfileController extends Controller
{
    // profile view
    public function index()
    {
        return view('sih_profile.view');
    }

    // profile edit
    public function showEditProfile()
    {
        $tags = tags::pluck('id','title')->toArray();
        return view('sih_profile.edit', compact('tags'));
    }

    // password update view
    public function showChangePassword()
    {
        return view('sih_profile.password');
    }

    // credit view
    public function showCredits()
    {
        return view('sih_profile.credit_view');
    }

    // credit request view
    public function showCreditRequest()
    {
        return view('sih_profile.credit_request');
    }
}
