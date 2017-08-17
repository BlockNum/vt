@extends('layouts.navbarlogreg')

@section('content')   
   <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            @if(Sentinel::check())
             <li role="presentation">
              <form action="logout" method="POST" id="logout-form">

                  {{ csrf_field() }}

                  <a href="#" onclick="document.getElementById('logout-form').submit()">Cerrar Sesion</a>
              </form>
            </li>
            @else
            <li role="presentation"><a href="login">Iniciar sesion</a></li>
            <li role="presentation"><a href="register">Registrarse</a></li>
            @endif
          </ul>
        </nav>
        <h3 class="text-muted">
            @if(Sentinel::check())
            Hello, {{ Sentinel::getUser()->first_name }}
            @else
                Autenticacion con Sentinel
            @endif
                </h3>
      </div>
@endsection