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
				['name'=>'sandy', 'age'=>14],
				['name'=>'kamina']

			];

	$comments = [

				['heading'=>'great product', 'comment' => 'i love this thing!'],
				['heading'=>'<h1>hello<h1/>', 'comment' => '<h3>text<h3/>'],

			];

    return view('about')->with([
    		'title'=>$title,
    		'metaDesc' =>$metaDesc,
    		'staff' => $staff,
    		'comments' => $comments
    	]);
});
