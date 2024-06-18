<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMKERMA | Lupa Kata Sandi</title>
    <!-- Icon Title -->
    <link rel="shortcut icon" href="assets/images/simkerma-logo-small.png">
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body style="background-color: #CFE1FF">
    <div class="container-fluid forget">
        <div class="row">
            <div class="col-md-6">
                <div class="square3"></div>
                <div class="side-bar">
                    <img src="assets/images/amico.png" alt="lupa password">
                </div>
            </div>
            <div class="col-md-6">
                <div class="button-back">
                    <a href="{{ url('/login') }}" class="button" role="button"><i class="fas fa-arrow-left"></i>Kembali</a>
                </div>

                <div class="forget-body">
                    <h1 class="forget-title text-center pt-5">Lupa Kata Sandi?</h1>
                    @if (session('status')) 
                        <p>{{ session('status') }}</p>
                    @endif
                    @error('email')
                        <p>{{ $message }}</p>
                    @enderror
                    <form action="{{ route('lupa-password') }}" method="POST">
                        @csrf
                        <label for="email">E-Mail</label><br>
                        <input type="email" id="email" name="email" placeholder="Masukkan alamat E-Mail" required>
                            
                        <div class="button forget-button text-center">
                            <button type="submit">Kirim</button>
                        </div>
                    </form>

                    @if (session('status')) 
                        <p>Tidak Menerima E-mail? Kirim lagi setelah 00:<span class="timer-email">15</span></p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        const timer = document.querySelector('.timer-email');
        if(timer != null) {
            setInterval(() => {
                let currentTime = parseInt(timer.innerText);
                if(currentTime > 0){
                    currentTime--;
                }
                timer.innerText = currentTime < 10 ? '0' + currentTime : currentTime;
            }, 1000);
        }
    </script>

    <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>