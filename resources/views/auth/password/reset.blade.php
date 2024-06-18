<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMKERMA | Atur Ulang Kata Sandi</title>
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
                <div class="reset-form">
                    <form action="{{ route('password.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="email" value="{{ $request->email }}">
                        <input type="hidden" name="token" value="{{ $request->token }}">
                        <h1 class="reset-title text-center pt-5">Ganti Kata Sandi</h1>
                        @error('password')
                            <p style="margin-left: 140px">{{ $message }}</p>
                        @enderror
                        <label for="password1">Kata Sandi Baru</label><br>
                        <input type="password" id="password1" name="password" placeholder="Masukkan kata sandi baru" required>
                        <i class="fas fa-eye-slash" id="togglePassword1"></i>
            
                        <label for="password2">Konfirmasi Kata Sandi</label><br>
                        <input type="password" id="password2" name="password_confirmation" placeholder="Masukkan konfirmasi kata sandi" required>
                        <i class="fas fa-eye-slash" id="togglePassword2"></i>
            
                        <div class="button reset-button text-center">
                            <button type="submit">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    const togglePassword1 = document.querySelector('#togglePassword1');
    const password1 = document.querySelector('#password1');

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
        const password2 = document.querySelector('#password2');

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
    </script>

    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>