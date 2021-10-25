<?php

namespace App\Http\Controllers;

use App\Citizen;
use App\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CitizenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $citizens = Citizen::all();
        return view('citizens/index', compact('citizens'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $wards = Ward::all();
        return view('citizens/create', compact('wards'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:citizens|max:255',
            'gender' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'ward_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $citizen = new Citizen;
        $citizen->name = $request->name;
        $citizen->gender = $request->gender;
        $citizen->address = $request->address;
        $citizen->phone = $request->phone;
        $citizen->ward_id = $request->ward_id;

        $citizen->save();

        $citizens = Citizen::all();
        return view('citizens/index', compact('citizens'));


        // return redirect('citizens/index')->with([
        //     'message'    => "Successfully Created Citizen", $citizens
        // ]);


        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function show(Citizen $citizen)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function edit(Citizen $citizen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Citizen $citizen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Citizen  $citizen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Citizen $citizen)
    {
        //
    }
}
