<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Tambahan CSS untuk Responsivitas -->
    <style>
        .card {
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .login-box {
                width: 90%;
                margin: 20px auto;
            }
        }

        @media (min-width: 577px) and (max-width: 768px) {
            .login-box {
                width: 70%;
                margin: 40px auto;
            }
        }

        @media (min-width: 769px) and (max-width: 992px) {
            .login-box {
                width: 50%;
                margin: 60px auto;
            }
        }

        @media (min-width: 993px) {
            .login-box {
                width: 30%;
                margin: 80px auto;
            }
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary shadow-lg">
            <div class="card-header text-center">
                <a href="{{ route('login') }}" class="h1"><b>Register</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Silahkan Register Terlebih Dahulu</p>

                <form action="{{ route('register_proses') }}" method="post">
                    @csrf
                    <div>
                        @error('name')
                            <small>{{ $message }}</small>
                        @enderror
                        <div class="input-group mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Nama lengkap"
                                value="{{ old('name') }}">
                        </div>
                    </div>
                    <div>
                        @error('email')
                            <small>{{ $message }}</small>
                        @enderror
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email"
                                value="{{ old('email') }}">
                        </div>
                    </div>
                    <div>
                        @error('password')
                            <small>{{ $message }}</small>
                        @enderror
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <br>
                <button type="button" class="btn btn-secondary btn-block" onclick="goBack()">Kembali</button>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- Sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if ($message = Session::get('success'))
        <script>
            Swal.fire({
                icon: "success",
                title: "Success",
                text: "{{ $message }}"
            });
        </script>
    @endif
    @if ($message = Session::get('failed'))
        <script>
            Swal.fire({
                icon: "error",
                title: "Failed",
                text: "{{ $message }}"
            });
        </script>
    @endif
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>
