@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8" >
          <b-card title="Inicio de sesion" class="my-3">
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

                <b-form  method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}


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
                      autofocus
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
                <b-form-group>
                    <b-form-checkbox
                   
                    name="remember"
                    {{ old('remember') ? 'checked="true"' : '' }}
                  >
                    Recordar sesion
                    </b-form-checkbox>
                </b-form-group>
                   
                   <b-button type="submit" variant="primary">
                    Ingresar
                   </b-button>
                   <b-button href="{{ route('password.request') }}" variant="link">
                    Olvidaste tu contreña?
                   </b-button>

                </b-form>                
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
