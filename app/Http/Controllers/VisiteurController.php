<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Event;
use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    public function index()
    {
        $categori=Categorie::where('nom', '=' ,'VISITEUR')->first();
        $events=Event::where('categorie_id', '=', $categori->id)->get();
        return view('visiteurs.index',compact('events'));
    }
    public function profil()
    {
    $user=\auth()->user();
        return view('admin.profile.edit',compact('user'));
    }

    public function profile(){
        $user=\auth()->user();
        
        if(request('photo')){
            $imagePath=request('photo')->store('uploads','public');
            $user->photo=$imagePath;
          }
        //   dd($user);
        // $user->email=request('email');
        // $user->password=request('password');
        $user->save();
        
        return back();
    }
    public function password(){
        $user=\auth()->user();
        
        //   dd($user);
        // $user->email=request('email');
        // $user->password=request('password');
        $user->save();
        
        return back();
    }
}
