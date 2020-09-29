<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    protected function create(Request $request)
    {
        $data=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        // assigner un role utilisateur par defaut à les auttres inscription
        $role = Role::select('id')->where('name', 'utilisateur')->first();
        $user->roles()->attach($role);
        return 
        redirect()->route('admin.personnels.index');
        
    }
}
