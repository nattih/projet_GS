@extends('layouts.app')
@section('content')
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="content-wrapper"> <br>
      <div class="container-fluid">
        <div class="card">
            <div class="card-header ">
              <h2 class="text-center">Les evenements du </h2>
            </div>
              <div class="table table-responsive p-0">
                <table id="example1" class="table table-striped">
                  <thead>
                  <tr>
                    <th>N°</th>
                    <th>Date</th>
                    <th>Titre</th>
                    <th>image</th>
                    <th >Option</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i=0; ?>
                    @foreach($events as $event)
                    <?php $i++; ?>
                  <tr>
                    <td>{{$i}}</td>
                    <td>{{$event->created_at}}</td>
                    <td> {{$event->titre}} </td>
                    <td><img src="{{asset('storage').'/'.$event->image}}" style="width:50px;height:50px;" class="bf5 border rounded-circle"></td>
                    <td>
                      <a href="{{route('events.show',[$event->id])}} "><button class="btn btn-success">Detail</button></a>
                      <a href="{{route('events.edit',$event->id)}} "><button class="btn btn-ntn">Editer</button></a>
                        <form action=" {{route('events.destroy',$event->id)}}" method="post" class="d-inline">
                          @csrf
                              @method('DELETE')
                          <button type="submit" class="btn btn-warning">Suprimer</button>
                        </form>
                    </td>
                  </tr>
              </tbody>
                @endforeach
            </table>
            {{$events->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection