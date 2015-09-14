<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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

    return view('about.index')->with([
            'title'=>$title,
            'metaDesc' =>$metaDesc,
            'staff' => $staff,
            'comments' => $comments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
