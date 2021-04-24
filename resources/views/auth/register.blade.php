@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8" >
            <b-card title="Registro" class="my-3">
                @if ($errors->any())
                <b-alert show variant="danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
                </b-alert>
                @else <b-alert show variant="primary">Por favor ingresa tus datos :</b-alert>
                @endif

                <b-form  method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}


                    <b-form-group
                    label="Nombre:"
                    label-for="name"
                  >
                    <b-form-input
                      id="name"
                      type="text"
                      name="name"
                      value="{{ old('name') }}"
                      autofocus
                      placeholder="Ingresa aqui tu Nombre"
                      required
                    ></b-form-input>

                    <b-form-group
                    label="Correo electronico:"
                    label-for="email"
                    description="Nunca compartiremos tu correo.Esta seguro con nostros."
                  >
                    <b-form-input
                      id="email"
                      type="email"
                      name="email"
                      value="{{ old('email') }}"
                      placeholder="Ingresa aqui tu correo"
                      required
                    ></b-form-input>
                  </b-form-group>
                  
                  <b-form-group
                  label="Contraseña:"
                  label-for="password"
                >
                  <b-form-input
                    id="password"
                    type="password"
                    name="password"
                    required
                  ></b-form-input>
                </b-form-group>

                  <b-form-group
                  label="Confirmar Contraseña:"
                  label-for="password_confirmation"
                >
                  <b-form-input
                    id="password_confirmation"
                    type="password"
                    name="passwor d_confirmation" 
                    required
                  ></b-form-input>
                </b-form-group>
                 
                   
                   <b-button type="submit" variant="primary">
                    Confirmar registro
                   </b-button>
                   <b-button href="{{ route('login') }}" variant="link">
                    Ya tengo cuenta
                   </b-button>

                </b-form>                
            </b-card>
        </b-col>
    </b-row>
</b-container>

@endsection
