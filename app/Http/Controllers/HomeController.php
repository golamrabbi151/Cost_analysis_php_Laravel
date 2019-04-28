<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserCost;
use Auth;

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
         $id= Auth::user()->id;
         $totalCost = UserCost::where('user_id','=',$id)->sum('cost');
         $totalIncome = UserCost::where('user_id','=',$id)->sum('income');
         $balence = $totalIncome - $totalCost;
     
    
      
        return view('home',compact('totalCost','totalIncome','balence'));
    }
    public function text(){
        return view('user.index');
    }
}
