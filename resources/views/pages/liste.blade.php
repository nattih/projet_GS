@extends('layouts.app')
@section('content')
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="content-wrapper"> <br>
      <section class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header">
              @foreach ($dpts as $dpt)
                    <a class="btn btn-info" href=" {{route('admin.dpts.show', $dpt->id)}}"> {{$dpt->nom}} </a> 
                @endforeach
            </div>
          </div>
        </div>
      </section>
@endsection