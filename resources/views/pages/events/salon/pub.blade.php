@extends('layouts.app')
@section('content')
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="content-wrapper"> <br>
    <div class="container-fluid">
      <section id="doctors" class="doctors">
        <div class="section-title">
          <h2>Les news du Bureau</h2>
        </div>
        <div class="card-body">
          @foreach ($events as $event)
            <div class="card mb-3"  data-aos="fade-up" style="max-width: 540px;">
              <div class="row no-gutters">
                <div class="col-md-5">
                  <img src="{{asset('storage').'/'.$event->image}}" class="img-fluid" alt="image">
                </div>
                <div class="col-md-7">
                  <div class="card-body">
                    <h2 class="card-title text-bold">{{$event->titre}}</h2>
                    <p class="card-text">{{$event->description}}</p>
                    <p class="card-text"><small class="text-muted">Publié le {{$event->created_at}} par
                      <span class="text-bold">{{$event->user->name}}</span></small></p>
                      <span class="text-bold"><a href=""><i class="icofont-google-talk"></i></a>(3)</span></small></p>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </section>
      {{$events->links()}}
  </div>
@endsection