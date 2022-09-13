<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="text-center">
        <p style="font-size: 23px"><b>ERL Report User Login</b></p>
    </div>

  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

        <img src="{{asset('admin/images/itca-log-erl.png')}}" class="img-fluid mx-auto d-block" alt="ICTA LOGO" style="width: 50%">
    {{-- <img src="{{asset('admin/images/itca-log-erl.png')}}" style="width: 40%" class="text-center" /> --}}
      {{-- <h5 class="">ERL Report User Login</h5> --}}

      <form  action="{{ route('user.login') }}" method="POST" class="mt-4">
        @csrf
       <div class="mb-3">
        <div class="input-group">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          @if ($errors->has('email'))
          <span class="text-danger mt-2">{{ $errors->first('email') }}</span>
      @endif
       </div>
       <div class="mb-2">
        <div class="input-group ">
            <input type="password" class="form-control" name="password" placeholder="EnterPassword">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          @if ($errors->has('email'))
              <span class="text-danger mt-2">{{ $errors->first('password') }}</span>
          @endif
       </div>

        <div class="row">
          <div class="col-8">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                <label for="customCheckbox1" class="custom-control-label">Remember Me</label>
              </div>
          </div>
        </div>
        <div class="social-auth-links text-center mb-3 mt-3">
            <input type="submit" class="btn btn-block btn-primary" value="Log In"/>
          </div>
      </form>

      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


<!-- jQuery -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
