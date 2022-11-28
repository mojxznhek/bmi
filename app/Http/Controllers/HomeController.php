<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Child;
use App\Models\RhuBhw;
use App\Models\ChildMedicalData;

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

         //count in cards
        $userCount = User::count();
        $childCount = Child::count();
        $rhuCount = RhuBhw::count();
        $rhuCount = RhuBhw::count();
        $medCount = ChildMedicalData::count();
        return view('home',[
        'userCount' => $userCount,
        'childCount' => $childCount,
        'rhuCount' => $rhuCount,
        'medCount' => $medCount,
        ]);
    }
}
