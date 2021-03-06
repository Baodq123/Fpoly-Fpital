<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Đăng nhập</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
  @if ( Session::has('success') )
  <div class="alert alert-success alert-dismissible" role="alert">
    <strong>{{ Session::get('success') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Close</span>
    </button>
  </div>
@endif
  <div class="login-box">
    <div class="login-logo">
      <a href="AdminLTE/index2.html"><img src="AdminLTE/dist/img/fpital-logo-white.png" width="100px;" alt=""></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">

        <form action="{{route('cp-login')}}" method="post">
          @csrf
          <div class="form-group">
            <input type="text" class="form-control" name="email" value="{{old('email')}}" placeholder="Nhập email..">
            @if($errors->first('email'))
            <span class="text-danger">{{$errors->first('email')}}</span>
            @endif
          </div>
          <div class="form-group mb-3">
            <input type="password" class="form-control" value="{{old('password')}}" name="password" placeholder="Nhập mật khẩu..">
            @if($errors->first('password'))
            <span class="text-danger">{{$errors->first('password')}}</span>
            @endif
          </div>
          <div class="row">
            <div class="col-6">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Lưu đăng nhập
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-6">
              <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="mb-1">
          <a href="forgot-password.html">Quên mật khẩu?</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="AdminLTE/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="AdminLTE/dist/js/adminlte.min.js"></script>

</body>
</html>
