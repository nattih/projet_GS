<?php

namespace App\Http\Controllers\Admin;

use App\CahierVisite;
use App\Departement;
use Illuminate\Support\Facades\Gate;

use App\Http\Controllers\Controller;
use App\Poste;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class UsersController extends Controller
{
public function __construct(){
    $this->middleware('auth');
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users= User::all();
        return view('admin.users.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
    //    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

       if (Gate::denies('edit-users')){ 

        return redirect()->route('admin.users.index');
       }

        $roles=Role::all();
        return view('admin.users.edit',[
            'user'=>$user,
            'roles'=>$roles
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        
        return redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

        if (Gate::denies('delete-users')){
            return redirect()->route('admin.users.index'); // on ne suprime pas les users tanq on est pas admin
           }
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
