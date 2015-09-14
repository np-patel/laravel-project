<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {

	//create some data
	$title = 'about page';
	$metaDesc = 'its an about us page';
	// $staff = ['nehal', 'bob', 'july', 'kamina'];
	$staff = [

				['name'=>'nehal', 'age'=>22],
				['name'=>'kamina', 'age'=>12],

			];

    return view('about')->with([
    		'title'=>$title,
    		'metaDesc' =>$metaDesc,
    		'staff' => $staff
    	]);
});
