<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>REGISTER | PAGE</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/') }}plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('/') }}plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/') }}dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Icon logo -->
    <link rel="shortcut icon" href="{{ asset('/') }}assets/img/logokp.png" />

    <link rel="stylesheet" href="sweetalert2.min.css">

    <style>
        .salahlogin {
            font-size: small;
        }

        .berhasilogout {
            font-size: small;
            width: 200px;
            height: 100px;
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box" style="width:420px">
        <div class="login-logo">
            <a href="{{ route('register') }}">

            </a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <!-- <p class="login-box-msg">Sign in to start your session</p> -->
                <div class="text-center">
                    <img src="assets/img/logokp.png" width="60px">
                    <br>
                    <br>
                    <b style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">SILAHKAN BUAT AKUN UNTUK LOGIN</b>
                </div>
                <br>
                <form action="{{ route('registeruser') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="{{ old('nama')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email')}}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: -15px;">
                        @error('email')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <br>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: -15px;">
                        @error('password')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <br>
                    <div class="input-group mb-3">
                        <select class="form-control" name="role" placeholder="Role">
                            <option value="" hidden>Jenis Role</option>
                            <option value="admin">Admin</option>
                            <option value="ptiket">Petugas Tiket</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-address-book"></span>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class=" text-center">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>

                </form>

                <!-- <br>
                <div class="text-center">
                    <b>- Or Continue With -</b>
                </div>

                <br>
                <div class="row text-center">
                    <div class="col-4">
                        <a href="#">
                            <i class="fab fa-facebook mr-2" style="font-size: 25px;"></i>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#">
                            <i class="fab fa-google-plus mr-2" style="font-size: 25px;"></i>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#">
                            <i class="fab fa-google-plus mr-2" style="font-size: 25px;"></i>
                        </a>
                    </div>

                </div> -->
                <!-- /.social-auth-links -->

                <br>
                <div class="text-center">
                    <div class="mb-0">
                        <p class="text-black">Sudah Punya Akun ?</p>
                        <a href="{{ route('login') }}" class="text-center"><b>Silahkan Login !</b></a>
                    </div>
                </div>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('/') }}plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/') }}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/') }}dist/js/adminlte.min.js"></script>
    <!-- SweerAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Pesan Failed -->
    @if($message = Session::get('failed'))
    <script>
        Swal.fire({
            text: "{{$message}}",
            className: "salahlogin",
        });
    </script>
    @endif

    <!-- Pesan Sukses atau Berhasil -->
    @if($message = Session::get('success'))
    <script>
        Swal.fire({
            position: "top-center",
            icon: "success",
            text: "{{$message}}",
            showConfirmButton: false,
            timer: 7000,
            className: 'berhasilogout'
        });
    </script>
    @endif
</body>

</html>