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
    
    $allStaff = \App\Staff::all();

        return view('about.index', compact('title', 'metaDesc', 'allStaff'));
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

        $this->validate( $request, [

                'first_name' => 'required|min:2|max:20',
                'last_name' => 'required|min:2|max:30',
                'age' => 'required|between:0,130|integer',
                'profile_image' => 'required|image|between:1,2000'

            ]);

        //validation pass

        //$staff = new \App\Staff();

        //$staff->first_name = $request->first_name;
        //$staff->last_name = $request->last_name;

        //$staff->save();

        $fileExtension = $request->file('profile_image')->getClientOriginalExtension();

        $fileName = 'staff-'.uniqid().'.'.$fileExtension;

        //move file in to its destination
        $request->file('profile_image')->move('img/staff', $fileName);

        //insert slug into the request
        $request['slug'] = str_slug( $request->first_name.' '.$request->last_name );

        
        //add in to database
        $staffMember = \App\Staff::create($request->all());

        return redirect('about/'.$staffMember->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        $staffMember = \App\Staff::where('slug', $slug)->firstOrFail();

        return view('about.show', compact('staffMember')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($slug)
    {

        $staffMember = \App\Staff::where('slug', $slug)->firstOrFail();

        return view('about.edit', compact('staffMember')); 

        return $slug;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $slug)
    {
      //validation
        $this->validate( $request, [

                'first_name' => 'required|min:2|max:20',
                'last_name' => 'required|min:2|max:30',
                'age' => 'required|between:0,130|integer'

            ]);

        //Find the staff member to edit
        $staffMember = \App\Staff::where('slug', $slug)->firstOrFail();

        $staffMember->first_name = $request->first_name;
        $staffMember->last_name = $request->last_name;
        $staffMember->age = $request->age;

        $staffMember->slug = str_slug( $request->first_name.' '.$request->last_name );

        $staffMember->save();

        return redirect('about/'.$staffMember->slug);

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
