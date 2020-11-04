@extends('layouts.app')
@section('content')
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="content-wrapper"> <br>
      <div class="container-fluid ">
        <div class="row container-fluid ">
            <div class="card col-6 ">
                <div class=" ">
                    <div>
                        <h3 class="text-center text-bold">Ajouter un département</h3>
                    </div>  
                    <form action="{{route('admin.dpts.store')}}" method="post">
                            @csrf
                        <div class="form-group">
                                <label for="nom">Entrez le nom</label>
                                <input type="text" class="form-control  @error('nom') is-invalid @enderror" type="text" name="nom" id="nom" >
                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-2 float-right">Enregistrer</button>
                        </div>
                    </form>
                </div>  
            </div>
            <div class="card col-6">
                <div class=" ">
                    <div>
                        <h3 class="text-center text-bold">Ajouter un poste</h3>
                    </div>  
                    <form action="{{route('admin.user.store')}}" method="post">
                            @csrf
                        <div class="form-group">
                                <label for="nom">Entrez le nom</label>
                                <input type="text" class="form-control  @error('nom') is-invalid @enderror" type="text" name="nom" id="nom" >
                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>Entrez departement</label>
                            <select class="form-control custom-select @error('departement_id') is-invalid @enderror" name="departement_id" value="{{ old('departement_id') }}" >
                              <option >choisir un departement</option>
                              @foreach($dpts as $dpt)  
                                  <option value="{{$dpt->id}}">{{$dpt->nom}}</option>
                              @endforeach
                            </select>
                            @error('departement_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                          </div>
                        <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-2 float-right">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>   
        </div>
    </div>
@endsection


 