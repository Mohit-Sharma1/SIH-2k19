<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// package
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

// models
use App\Models\Tags;
use App\Models\Ideas;

//facades
use Illuminate\Support\Facades\Input;
use Validator;
use Storage;
use Session;
use Auth;

class MyAccountController extends Controller
{
    // my-account ideas view
    public function showIdeas()
    {
        $myideas = Ideas::where('creator_id', Auth::id())->get()->toArray();
        return view('sih_my_account.view_ideas', compact('myideas'));
        //return var_dump($myideas);
    }

    // my-account challenges view
    public function showChallenges()
    {
        return view('sih_my_account.view_challenges');
    }

    // my-account create ideas view
    public function showCreateIdea()
    {
        $tags = tags::pluck('id','title')->toArray();
        return view('sih_my_account.create_idea', compact('tags'));
    }

    // my-account create ideas
    public function createIdeas(Request $request)
    {
        $rules = array(
            'title' => 'required',
            'description' => 'required'
        );
        
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        
        // if the validator fails, redirect back to the form
        if ($validator->fails())
        {
            Session::flash('message', 'There was an error please try again!'); 
            Session::flash('alert-class', 'danger');
            return redirect('my-account/ideas/create');
        }
        else
        {
            $request = new Ideas;
            $request->title = Input::get('title');
            $request->description = Input::get('description');
            $request->creator_id = Auth::id();
            $request->display_picture_url = 'null';
            $request->additional_info = 'null';
            $request->status = '0';
            $request->tags = 'null';
            $request->ranking_score = '12';
            $request->save();

            return redirect('my-account/ideas');
        }
    }

    // my-account create challenges view
    public function showCreateChallenge()
    {
        $tags = tags::pluck('id','title')->toArray();
        return view('sih_my_account.create_challenge', compact('tags'));
    }

    // my-account create ideas
    public function createChallenges()
    {
        //
    }
}
