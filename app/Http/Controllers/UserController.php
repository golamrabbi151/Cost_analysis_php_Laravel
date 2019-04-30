<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UserCost;
use App\User;
// use App\Http\Controllers\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { // $test = "test work";

        // return view('home',compact('test'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $data  = $request->except('_token');
        $data['user_id']=Auth::user()->id;
        UserCost::create($data);

        return redirect('home');


    }

// profile 
    public function profile(){
            $id = Auth::user()->id;
            $data = UserCost::where('user_id','=',$id)->paginate(4);
            $users = User::all()->where('id','=',$id);

             $totalCost = UserCost::where('user_id','=',$id)->sum('cost');
             $totalIncome = UserCost::where('user_id','=',$id)->sum('income');
             $balence = $totalIncome - $totalCost;
            return view("users/profile",compact('data','users','totalCost','totalIncome','balence'));
    }
    public function showdetails(){
     //    $id = Auth::user()->id;
     // $data = UserCost::where('user_id','=',$id)->paginate(30);
        // return view('users.show_details',compact('data'));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
