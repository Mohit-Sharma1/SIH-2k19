<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return redirect('/announcements');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function() {
    return redirect('/announcements');
})->name('home');

Route::middleware('auth')->group(function() {

    // all roles
    Route::group([], function() {

        Route::group(['prefix' => 'announcements'],function() {

            Route::get('/', 'AnnouncementsController@index');
        
        });
        
        Route::group(['prefix' => 'dashboard'],function() {
        
            Route::get('/', 'DashboardController@index');
            
        });

        Route::group(['prefix' => 'support'],function() {
    
            Route::get('/', 'SupportController@index');
            
        });
        
        Route::group(['prefix' => 'profile'],function() {
        
            Route::get('/', 'ProfileController@index');
            Route::get('/edit', 'ProfileController@showEditProfile');
            Route::get('/password', 'ProfileController@showChangePassword');
            Route::get('/credits', 'ProfileController@showCredits');
            Route::get('/credits/add', 'ProfileController@showCreditRequest');
            
        });

    });

    // admin role
    Route::group(['middleware' => 'role:admin'],function() {

        Route::group(['prefix' => 'tags'],function() {
    
            Route::get('/', 'TagController@index');
            Route::get('/create', 'TagController@create');
            Route::post('/create', 'TagController@store');
            
        });

        Route::group(['prefix' => 'verifications'],function() {
    
            Route::get('/', 'CreditController@showVerification');
            
        });

        Route::group(['prefix' => 'announcements'],function() {
    
            Route::get('/create', 'AnnouncementsController@showCreateAnnouncements');
            Route::post('/create', 'AnnouncementsController@createAnnouncements');
            
        });

    });

    // startup role
    Route::group(['middleware' => 'role:startup'],function() {

        Route::group(['prefix' => 'challenges'],function() {
    
            Route::get('/', 'ChallengesController@index');
            
        });

        Route::group(['prefix' => 'corporates'],function() {
    
            Route::get('/', 'CorporatesController@index');
            
        });

        Route::group(['prefix' => 'my-account'],function() {
    
            Route::group(['prefix' => 'ideas'],function() {
                Route::get('/', 'MyAccountController@showIdeas');
                Route::get('/create', 'MyAccountController@showCreateIdea');
                Route::post('/create', 'MyAccountController@createIdeas');
            });
            
        });

    });

    // corporate roll
    Route::group(['middleware' => 'role:corporate'],function() {

        Route::group(['prefix' => 'ideas'],function() {
    
            Route::get('/', 'IdeasController@index');
            
        });
        
        
        Route::group(['prefix' => 'startups'],function() {
        
            Route::get('/', 'StartupsController@index');
            
        });
        
        Route::group(['prefix' => 'my-account'],function() {
    
            Route::group(['prefix' => 'challenges'],function() {
                Route::get('/', 'MyAccountController@showChallenges');
                Route::get('/create', 'MyAccountController@showCreateChallenge');
    
            });
            
        });

    });

});