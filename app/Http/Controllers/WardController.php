<?php

namespace App\Http\Controllers;

use App\Ward;
use App\Lga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class WardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $wards = Ward::all();

        return view('wards/index', compact('wards'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $lgas = Lga::all();
        return view('wards/create', compact('lgas'));
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
            'name' => 'required|unique:wards|max:255',
            'lga_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('wards/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $ward = new Ward;
        $ward->name = $request->name;
        $ward->lga_id = $request->lga_id;
        $ward->save();

        $wards = Ward::all();
        return view('wards/index', compact('wards'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function show(Ward $ward)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function edit(Ward $ward)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ward $ward)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ward $ward)
    {
        //
    }
}
