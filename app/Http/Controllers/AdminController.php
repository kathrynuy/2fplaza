<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Http\Requests;

use App\Admin;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $users = DB::table('users')->where('roles_id', '2')->get();

      return view('admin.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validation
       $this->validate($request,[
         'firstname' => 'required|min:2|max:255',
         'lastname' => 'required|min:2|max:255',
         'roles_id' => '2',
         'email' => 'required|email|min:6|max:255|unique:users',
         'password' => 'required|min:6|confirmed',
         'roomNum' => 'min:3|confirmed',
         'checkIn' => 'date|confirmed',
         'checkOut' => 'date|confirmed',
      ]);
       // create new data
       $user = new user;
       $user->firstname = $request->firstname;
       $user->lastname = $request->lastname;
       $user->email = $request->email;
       $user->password = $request->password;
       $user->save();
      //  return redirect()->route('admin.index')->with('alert-success','Guest Data Saved!');
       return redirect()->route('admin.index')->with('status', 'Guest Data Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::findOrFail($id);
     // return to the edit views
     return view('admin.edit',compact('user'));
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
        // validation
       $this->validate($request,[
         'firstname'=> 'required',
         'lastname' => 'required',
         'roomNum' => 'required',
         'checkIn' => 'required',
         'checkOut' => 'required',
     ]);

       $user = User::findOrFail($id);
       $user->firstname = $request->firstname;
       $user->lastname = $request->lastname;
       $user->roomNum = $request->roomNum;
       $user->checkIn = $request->checkIn;
       $user->checkOut = $request->checkOut;
       $user->save();

       return redirect()->route('admin.index')->with('alert-success','User Data Saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // delete data
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.index')->with('alert-success','User Data Saved!');
    }
}
