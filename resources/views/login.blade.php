<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HR | Log in</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#">
        <b>Human</b>Resources </a>
    </div>
    <!-- /.login-logo -->
    <div class="card">

      @include('message')

      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="{{ url('login_post') }}" method="post">

          {{ csrf_field() }}

          <div class="input-group mb-3">
            <input type="email" name="email" required value="{{ old('email') }}"
              class="form-control @error('email') is-invalid @enderror" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
              placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">

              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <div class="d-flex justify-content-between mt-3">
          <p class="mb-0">
            <a href="{{ url('register') }}" class="text-center" onmouseover="this.style.textDecoration='underline';"
              onmouseout="this.style.textDecoration='none';">
              Not Register? Sign Up
            </a>
          </p>
          <p class="mb-1">
            <a href="{{ url('forgot-password') }}" onmouseover="this.style.textDecoration='underline';"
              onmouseout="this.style.textDecoration='none';">
              Forgot Password
            </a>
          </p>
        </div>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
  <!-- jQuery -->
  <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('backend/dist/js/adminlte.min.js') }}"></script>

  <script type="text/javascript">

    $(document).ready(function () {
        // Clear validation errors on input focus
        $('.form-control').on('input', function () {
            var input = $(this);
            if (input.val()) {
                input.removeClass('is-invalid');
                input.siblings('.invalid-feedback').remove();
            } 
        });
    });

</script>

</body>

</html>