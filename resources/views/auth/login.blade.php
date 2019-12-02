@extends('auth.contenido')

@section('login')
<div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
  
        <form action="{{ route('login')}}" method="post" class="was-validated">
          {{csrf_field()}}
        <div class="input-group mb-3 {{$errors->has('email' ? 'is-invalid' : '')}}">
        <input type="email" id="email" value="{{old('email')}}" name="email" class="form-control" placeholder="Email">
            {!!$errors->first('email', '<span class="invalid-feedback">:message</span>')!!}
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3 {{$errors->has('password' ? 'is-invalid' : '')}}">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            {!!$errors->first('password', '<span class="invalid-feedback">:message</span>')!!}
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
  
        <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p>
       
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
@endsection
