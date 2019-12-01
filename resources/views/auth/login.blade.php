@extends('auth.contenido')

@section('login')
<div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Inicia Sesion</p>

        <form class="form-horizontal" action="{{ route('login') }}" method="POST">
        {{ csrf_field() }}
            <div class="input-group mb-3{{$errors->has('email' ? 'is-invalid' : '')}}">
            <input type="email" class="form-control" placeholder="Email">
            {!! $errors->first('email','<span class="invalid-feedback">:message</span>') !!}
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3{{$errors->has('password' ? 'is-invalid' : '')}}">
            <input type="password" class="form-control" placeholder="Password">
            {!! $errors->first('password','<span class="invalid-feedback">:message</span>') !!}
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Iniciar Sesion</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
@endsection
