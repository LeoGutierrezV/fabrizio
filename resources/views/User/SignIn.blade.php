<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login fsw</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="static/admin/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="static/admin/dashboard/dist/css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="static/css/style.css">
  <link rel="shortcut icon" type="ico/icon" href="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/logos%2FOJO.png?alt=media&token=f1b174c8-fb3d-49e4-980e-cc666daa42f7">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><img class="text-center" id="colorlib-logo" src="https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/logos%2FLOGO%20FSW%20negro.png?alt=media&token=ffaba445-0383-4b10-a893-b87897658fc9" height="auto" width="250"></a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Iniciar su sesión</p>
      <form action="/signin" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          {{csrf_field()}}
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!--<div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recordar Contraseña
              </label>
            </div>
          </div>-->
          {{-- <p class="col-6">
            <a href="forgot-password.html">Olvide mi contraseña</a>
          </p> --}}
          <!-- /.col -->
          <div class="col-12 text-center">
            <button type="submit" class="btn block-black border-black Franklin">Iniciar Session</button>
          </div>
          <!-- /.col -->
          <br>
          <br>
          <br>
          @if($validate['email'])

             <div class="col-12 alert alert-danger">
              El correo Ingresado es Incorrecto</div>
   
          @endif
          @if($validate['password'])

          <div class="col-12 alert alert-danger">
           la contraseña Ingresada es Incorrecta</div>

            @endif

        </div>
      </form>
      <!--
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>-->
      <!-- /.social-auth-links -->

      <br>
      <p class="col-12 mb-0 text-center text-black">
        Te puedes registrar haciendo click <a class="link" href="/signup">aqui</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="static/js/jquery-1.js"></script>
<!-- Bootstrap 4 -->
<script src="static//js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="static/admin/dashboard/dist/js/adminlte.min.js"></script>
</body>
</html>
