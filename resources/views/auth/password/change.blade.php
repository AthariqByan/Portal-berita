<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMKERMA | Ganti Kata Sandi</title>
    <!-- Icon Title -->
    <link rel="shortcut icon" href="{{ asset('assets/images/simkerma-logo-small.png') }}">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body style="background-color: #CFE1FF">
    <div class="container-fluid reset">
        <div class="row">
            <div class="col-md-6">
                <div class="square3"></div>
                <div class="side-bar">
                    <img src="{{ asset('assets/images/amico1.png') }}" alt="lupa password">
                </div>
            </div>
            <div class="col-md-6">
                <div class="button-back">
                    <a href="{{ route('dashboard') }}" class="button" role="button"><i class="fas fa-arrow-left"></i>Kembali</a>
                </div>

                <div class="reset-form">
                    <form action="{{ route('password.store') }}" method="POST">
                        @csrf
                        <h1 class="reset-title text-center pt-5">Ganti Kata Sandi</h1>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <label for="old_password">Kata Sandi Lama</label><br>
                        <input type="password" id="old_password" name="old_password" placeholder="Masukkan kata sandi lama" required>
                        <i class="fas fa-eye-slash" id="togglePassword1"></i>
            
                        <label for="new_password">Kata Sandi Baru</label><br>
                        <input type="password" id="new_password" name="new_password" placeholder="Masukkan kata sandi baru" required>
                        <i class="fas fa-eye-slash" id="togglePassword2"></i>

                        <label for="new_password_confirmation">Konfirmasi Kata Sandi Baru</label><br>
                        <input type="password" id="new_password_confirmation" name="new_password_confirmation" placeholder="Konfirmasi kata sandi baru" required>
                        <i class="fas fa-eye-slash" id="togglePassword3"></i>
            
                        <div class="button reset-button text-center">
                            <button type="submit" class="button reset-button text-center">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    const togglePassword1 = document.querySelector('#togglePassword1');
    const password1 = document.querySelector('#old_password');

        togglePassword1.addEventListener('click', function() {
            if (password1.type === 'password') {
                password1.type = 'text';
                togglePassword1.classList.add('fa-eye');
                togglePassword1.classList.remove('fa-eye-slash');
            } else {
                password1.type = 'password';
                togglePassword1.classList.add('fa-eye-slash');
                togglePassword1.classList.remove('fa-eye');
            }
        });

    const togglePassword2 = document.querySelector('#togglePassword2');
    const password2 = document.querySelector('#new_password');

        togglePassword2.addEventListener('click', function() {
            if (password2.type === 'password') {
                password2.type = 'text';
                togglePassword2.classList.add('fa-eye');
                togglePassword2.classList.remove('fa-eye-slash');
            } else {
                password2.type = 'password';
                togglePassword2.classList.add('fa-eye-slash');
                togglePassword2.classList.remove('fa-eye');
            }
        });

    const togglePassword3 = document.querySelector('#togglePassword3');
    const password3 = document.querySelector('#new_password_confirmation');

        togglePassword3.addEventListener('click', function() {
            if (password3.type === 'password') {
                password3.type = 'text';
                togglePassword3.classList.add('fa-eye');
                togglePassword3.classList.remove('fa-eye-slash');
            } else {
                password3.type = 'password';
                togglePassword3.classList.add('fa-eye-slash');
                togglePassword3.classList.remove('fa-eye');
            }
        });
    </script>

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if(session('success'))
            <script>
                Swal.fire({
                    title: "Sukses!",
                    text: "{{ session('success') }}",
                    icon: "success"
                }).then(function() {
                    window.location.href = "{{ route('dashboard') }}";
                });
            </script>
    @endif
    @if(session('error'))
        <script>
            Swal.fire({
                title: "Error!",
                text: "{{ session('error') }}",
                icon: "error"
            })
        </script>
    @endif
</body>
</html>