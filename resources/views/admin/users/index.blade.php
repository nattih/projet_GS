@extends('layouts.app')

@section('content')
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="content-wrapper "> <br>
      <section class="content ">
        <div class="container-fluid">
<<<<<<< HEAD
          <div class=" mt-2">
            @if(Session::has('message'))
              <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
				  </div>
=======
>>>>>>> 532197dd2d43c8d45040c493d3d41c886521e6c6
          <div class="card " id="bgPhto">
              <section  data-aos="fade-right">
                <div class="section-title">
                  <h2>BIENVUE A VOTRE ESPACE DE TRAVAIL</h2>
                </div>

                {{-- <img src="{{asset('assets/img/about.jpg')}}" alt="image"> --}}
              </section>
        </div>
      </div>
      </section>
    </div>         
    <footer class="main-footer">
      <b>Copyright &copy; 2020  <a href="{{route('portail')}}">nth_design</a>.</b>
      Tout droit reservé.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
      </div>
    </footer>
  </div>
@endsection
