@extends('layouts.app')
@section('content')
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="content-wrapper"> <br>
      <div class="container-fluid">
        <div class="card">
            <div class="d-fex bg-danger">
                @foreach ($categories as $categorie)
                    <a class="btn btn-info" href="{{route('categories.show', $categorie->id)}}"> {{$categorie->nom}} </a> 
                @endforeach
            </div>
        </div>
      </div>
    </div>
@endsection