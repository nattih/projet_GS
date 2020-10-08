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
        return view('admin.profile.edit');
    }
}
