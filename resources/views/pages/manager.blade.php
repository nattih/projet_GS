@extends('layouts.app')
@section('content')

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="content-wrapper"> <br>
      <section class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header">
              @can('delete-users')
              <a class="btn btn-ntn" href="{{ route('register') }}">{{ __('Ajouter un membre') }}</a>
              @endcan
            </div>
            <div class="card-body table-responsive  p-0">
             <table class="table table-hover dataTable text-nowrap" id="exemple1">
                <thead>
                  <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Roles</th>
                    <th scope="col">Actions </th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0; ?>
                @foreach($users as $user)
                <?php $i++; ?>
                    <tr>
                        <th scope="row">{{$i}}</th>
                        <td >{{$user->name}}</td>
                        <td >{{$user->email}}</td>
                        <td >{{implode(' , ' , $user->roles()->get()->pluck('name')->toArray())}}</td>
                        <td >
                          @can('edit-users')
                            <a href="{{route('admin.users.edit',$user->id)}}"><button class="btn btn-ntn">Editer</button></a>
                          @endcan
                            @can('delete-users')
                            <form action="{{route('admin.users.destroy',$user->id)}}" method="post" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-warning">Suprimer</button>
                            </form>
                        @endcan
                        </td>
                    </tr>
              @endforeach
                </tbody>
              </table>
              <button id="test">test</button>
              {{$users->links()}}
            </div>
        </div>
      </section>
      <script>
        $('#test').click(function(){
          alert('ok');
        })
        $(function () {
          $("#example1").DataTable({
            "responsive": true,
            "autoWidth": true,
          });

        });
      </script>
@endsection