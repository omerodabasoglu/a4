<?php

/**
* Log viewer
* (only accessible locally)
*/
if(config('app.env') == 'local') {
    Route::get('/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}


# Main homepage
Route::get('/', 'FormController@index');

# Main homepage
Route::get('/print', 'FormController@print');

#--------------------------------------------------------------#
# Restricted routes for guests                                 #
#--------------------------------------------------------------#
Route::group(['middleware' => 'auth'], function() {

    # Get route to show a form to create a add a new institution
    Route::get('/sports', 'FormController@addNewInstitution');

    # Post route to process the form to add a new institution
    Route::post('/sports', 'FormController@storeNewInstitution');

    # Get route to show a form to edit an existing institution
    Route::get('/edit/{id}', 'FormController@edit');

    # Post route to process the form to save edits to a institution
    Route::post('/edit/{id}', 'FormController@saveEdits');

    # Get route to confirm deletion of book
    Route::get('/delete/{id}', 'FormController@confirmDeletion');

    # Post route to actually delete the book
    Route::post('/delete', 'FormController@delete');

    # Get route to show an individual institution
    Route::get('/sports/{id?}', 'FormController@show');

});

# To drop all tables and have a clean slate to begin with
if(App::environment('local')) {

    Route::get('/drop', function() {

        DB::statement('DROP database a4');
        DB::statement('CREATE database a4');

        return 'Dropped a4; created a4.';
    });

};

Auth::routes();

Route::get('/home', 'FormController@index');

Route::get('/logout', function() {
    Auth::logout();
    dump("You've been logged out");
});

if(config('app.env') == 'local') {
    #temporary route to check login session_status
    Route::get('/show-login-status', function() {

        # You may access the authenticated user via the Auth facade
        $user = Auth::user();

        if($user)
            dump('You are logged in.', $user->toArray());
        else
            dump('You are not logged in.');

        return;
    });
}
