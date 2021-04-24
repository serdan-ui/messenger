<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


</head>
<body>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
  </form>
    <div id="app">

        <b-navbar toggleable="sm" type="dark" variant="primary">
            <b-navbar-toggle target="nav-text-collapse"></b-navbar-toggle>
        
            <b-navbar-brand  href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</b-navbar-brand>
        
            <b-collapse id="nav-text-collapse" is-nav>
                <b-navbar-nav class="ml-auto">
                    @guest
                    <b-nav-item href="{{route('login')}}">Ingresar</b-nav-item>
                    <b-nav-item href="{{route('register')}}">Registrarse</b-nav-item>
                    @else  
                    <b-nav-item-dropdown text="{{ auth()->user()->name }}" right>
                      <b-dropdown-item 
                      href="#"
                      @click="logout">Cerrar sesion</b-dropdown-item>
                    </b-nav-item-dropdown>
                    @endguest
                    <!-- Navbar dropdowns -->
                    
                    
                  </b-navbar-nav>
            </b-collapse>
          </b-navbar>











        

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
