<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lga;
use App\State;
use App\Ward;
use App\Citizen;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $states = State::all();
        $lgas = Lga::all();
        $wards = Ward::all();
        $citizens = Citizen::all();

        $wardcitizencount = Ward::withCount(['citizen'])->get();
        $lgawardscount = Lga::withCount(['ward'])->get();
        $statelgascount = State::withCount(['lga'])->get();



        return view('home', compact(["states", "lgas", "wards", "citizens", "wardcitizencount", "lgawardscount", "statelgascount"]));
    }
}
