<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// package
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class IdeasController extends Controller
{
    // ideas view
    public function index()
    {
        return view('sih_ideas.view');
    }
}
