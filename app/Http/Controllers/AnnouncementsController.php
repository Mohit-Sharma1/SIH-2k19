<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// package
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

// models
use App\Models\Announcements;

//facades
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use Auth;

class AnnouncementsController extends Controller
{
    // announcement view function
    public function index()
    {
        $announcements = Announcements::all()->toArray();
        return view('sih_announcements.view', compact('announcements'));
    }

    // announcement create view
    public function showCreateAnnouncements()
    {
        return view('sih_announcements.create');
    }

    // announcement create
    public function createAnnouncements()
    {
        $rules = array(
            'title' => 'required',
            'description' => 'required',
            'type' => 'required',
        );
        
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        
        // if the validator fails, redirect back to the form
        if ($validator->fails())
        {
            Session::flash('message', 'There was an error please try again!'); 
            Session::flash('alert-class', 'danger');
            return redirect('tags/create');
        }
        else
        {
            $request = new Announcements;
            $request->title = Input::get('title');
            $request->description = Input::get('description');
            $request->type = Input::get('type');
            $request->save();

            return redirect('announcements');
        }
    }
}
