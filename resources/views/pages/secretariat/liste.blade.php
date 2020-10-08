@extends('layouts.app')
@section('content')
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="content-wrapper"> <br>
    <div class="container-fluid">
      <div class="card">
        <div class="card-header ">
          <h3 class="text-center">Cahier de visite</h3>
        </div>
        <div class="table table-responsive p-0">
          <table id="example1" class="table table-striped">
            <thead>
              <tr>
                <th>N°</th>
                <th>Date</th>
                <th>Nom & Prénom</th>
                <th>CNIB</th>
                <th>Modif</th>
                <th>Contact</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=0; ?>
                @foreach($cahiers as $cahier)
                <?php $i++; ?>
                <tr>
                  <td>{{$i}}</td>
                  <td class="text-bold">{{$cahier->created_at}}</td>
                  <td>{{$cahier->nom}} {{$cahier->prenom}}
                  </td>
                  <td> {{$cahier->cnib}}</td>
                  <td> {{$cahier->motif}}</td>
                  <td>{{$cahier->contact}}</td>
                  <td>{{$cahier->genre}}</td>
                  <td>
                    <a href="{{route('cahier.edit',$cahier->id)}}"><button class="btn btn-ntn">Editer</button></a>
                      <form action="{{route('cahier.destroy', $cahier->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-warning">Suprimer</button>
                      </form>
                  </td>
                </tr>
              </tbody>
                @endforeach
            </table>
              {{$cahiers->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
 
