<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyTrip | Register</title>
    <link rel="shortcut icon" href="{{asset('images/logo-easytrip-icon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/register-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
       
</head>
<body>
    <nav id="navbar">
        <div class="container">
            <div class="nav-logo">
                <a href="/">
                    <img src="{{asset('images/logo-easytrip.png')}}" alt="Logo EasyTrip">
                </a>
            </div>
            <div class="nav-menu right">
                <div class="login-btn">
                    <a href="/login">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <section class="content">
        <div class="whole-login-form-container">
            <div class="login-form">
                <div class="sub-login-form">
                    <h1>Buat akun baru</h1>
                    <div class="baris-1">
                        <div class="input-field">
                            <label for="Nama-depan">Nama Depan</label>
                            <hr>
                            <input type="text" id="Nama-depan" required>
                        </div>
                        <div class="input-field">
                            <label for="Nama-belakang">Nama Belakang</label>
                            <hr>
                            <input type="text" id="Nama-belakang" required>
                        </div>
                    </div>
                    <div class="baris-2">
                        <div class="input-field">
                            <label for="Email">Email</label>
                            <hr>
                            <input type="text" id="Email" required>
                        </div>
                        <div class="input-field">
                            <label for="Nomor-hp">Nomor HP</label>
                            <hr>
                            <input type="text" id="Nomor-hp" required>
                        </div>
                    </div>
                    <div class="baris-3">
                        <div class="input-field">
                            <label for="Password">Password</label>
                            <hr>
                            <input type="text" id="Password" required>
                        </div>
                        <div class="input-field">
                            <label for="Konfirmasi-password">Konfirmasi Password</label>
                            <hr>
                            <input type="text" id="Konfirmasi-password" required>
                        </div>
                    </div>
                    <div class="check-box">
                        <input type="checkbox" id="check-box">
                        <label for="check-box">Saya setuju dengan syarat dan ketentuan</label>
                    </div>
                    <button type="submit">Daftar</button>
                </div>
                <div class="teks-Atau">
                    <hr> Atau <hr>
                </div>
                <div class="google&fb-img">
                    <img src="{{asset('images/Facebook-img.png')}}" alt="Facebook">
                    <img src="{{asset('images/Google-img.png')}}" alt="Google">
                </div>
            </div>
        </div>
        <div class="bg-image">
            <img src="{{asset('images/img-eiffeltower.png')}}" alt="">
        </div>
    </section>
</body>
</html>