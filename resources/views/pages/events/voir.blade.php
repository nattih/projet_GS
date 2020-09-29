@extends('layouts.app')
@section('content')
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="content-wrapper"> <br>
        <div class="container-fluid">
            <div class="card"> 
                <section class="bg-dark">
                    <div class="container">
                        <div class="categorie">
                            <h2> {{$event->titre}}</h2>
                        </div>
                        <section id="portfolio" class="portfolio section-bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-5">
                                        <img style="height:262.5px;" src="{{asset('storage').'/'.$event->image}}" class="w-100 mt-4">
                                    </div>
                                        <div class="col-7 droite">
                                            <div class="list-group"> <br> <br> <br>
                                                <div class="list-item text-bold"><span class="text-info" >Titre:</span><span > {{$event->titre}} </div><br>
                                                <div class="list-item text-bold"><span class="text-info">Description: </span> {{$event->description }}  </div><br>
                                                <div class="list-item text-bold"><span class="text-info">Date de creation: </span> {{$event->created_at}} </div><br>
                                                <div class="list-item text-bold"><span class="text-info">Crée par: </span> {{$event->user->name}} </div><br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection