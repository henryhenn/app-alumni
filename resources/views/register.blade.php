<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register | App Alumni</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('Admin-backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('Admin-backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('Admin-backend/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h1><b>Register</b></h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="#" method="post">
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror

        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror

        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror

        <div class="input-group mb-3">
          <input type="text" name="alamat" class="form-control" placeholder="Alamat">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-card"></span>
            </div>
          </div>
        </div>
        @error('alamat')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror

        <div class="input-group mb-3">
          <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telepone">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        @error('no_telp')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror

        <div class="input-group mb-3">
          <input type="text" name="tahun_lulus" class="form-control" placeholder="Tahun Lulus">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-calendar"></span>
            </div>
          </div>
        </div>
        @error('tahun_lulus')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror

        <div class="input-group mb-3">
          <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-briefcase"></span>
            </div>
          </div>
        </div>
        @error('pekerjaan')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror

        <div class="input-group mb-3">
          <input type="text" name="hobby" class="form-control" placeholder="Hobby">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-icons"></span>
            </div>
          </div>
        </div>
        @error('hobby')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror

<label for="">Tanggal Lahir</label>
        <div class="input-group mb-3">
            <input type="date" name="tanggal_lahir" class="form-control">
            <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-calendar"></span>
            </div>
          </div>
        </div>
        @error('tanggal_lahir')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror

<label for="">Jenis Kelamin</label>
            <div class="input-group w-75 display-flex justify-content-between mb-3">
                <div>

                    <input type="radio" name="jenis_kelamin" class="form-radio mr-2" value="Laki-laki">
                        <span>Laki-laki</span>
                    </div>
                    <div>
                        <input type="radio" name="jenis_kelamin" class="form-radio mr-2" value="Perempuan">
                        <span>Perempuan</span>
                    </div>
        </div>
        @error('jenis_kelamin')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror

        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      {{-- <div class="social-auth-links text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> --}}

      <a href="login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('Admin-backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('Admin-backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Admin-backend/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
