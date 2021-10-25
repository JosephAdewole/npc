<?php

namespace App\Http\Controllers;

use App\Lga;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class LgaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lgas = Lga::all();

        return view('lgas/index', compact('lgas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $states = State::all();
        return view('lgas/create', compact('states'));
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
            'state_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('lgas/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $lga = new Lga;
        $lga->name = $request->name;
        $lga->state_id = $request->state_id;
        $lga->save();

        $lgas = Lga::all();
        return view('lgas/index', compact('lgas'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lga  $lga
     * @return \Illuminate\Http\Response
     */
    public function show(Lga $lga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lga  $lga
     * @return \Illuminate\Http\Response
     */
    public function edit(Lga $lga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lga  $lga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lga $lga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lga  $lga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lga $lga)
    {
        //
    }
}
