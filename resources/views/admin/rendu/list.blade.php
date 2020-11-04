@extends('layouts.app')
@section('content')
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="content-wrapper"> <br>
      <div class="container-fluid ">
        @foreach ($rendus as $rendu)
        {{-- @can('view', $rendu) --}}
        <div class="list-group-item">
            <h4> <a href="{{route('rendu.show',$rendu)}}">{{$rendu->titre}}</a></h4>
            <p>{{$rendu->contenu}}</p>
            <div class="d-flex justify-content-between align-items-center">
                <small> Posté le {{$rendu->created_at->format('d/m/y à H:m')}}</small>
                <span class="badge badge-primary"> par {{$rendu->user->name}} {{$rendu->user->prenom}}</span>
            </div>
        </div>
        {{-- @endcan --}}
        @endforeach
      </div>
      <div class="d-flex justify-content-center mt-1">
        {{$rendus->links()}}
      </div>
    </div>
@endsection