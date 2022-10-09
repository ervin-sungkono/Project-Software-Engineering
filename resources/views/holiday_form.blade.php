<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyTrip | Holiday Planner</title>

    <link rel="shortcut icon" href="{{asset('images/logo-easytrip-icon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/holiday-planner-style.css')}}">
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
            <div class="nav-menu left">
                <a href="/">Beranda</a>
                <a href="/product">Pesan Tiket</a>
                <a href="{{route('holiday.planner')}}" class="active">Holiday Planner</a>
                <a href="#Promo">Promo</a>
            </div>
            <div class="nav-menu right">
                <a href="#BonusMember">Bonus Member</a>
                <a href="#CekOrder">Cek Order</a>
                <div class="login-btn">
                    <a href="/login">Login</a>
                </div>
            </div>
        </div>
    </nav>
   <section class="content">
        <div class="left">
            <div class="container">
                <h1>Holiday Planner</h1>
                <h2>Buat perencanaan liburanmu dengan fitur terbaru kami.</h2>
                <div class="input-field">
                    <label for="destination">Destinasi (ex: Jakarta, Bandung, Bali, dst)</label>
                    <hr>
                    <input type="text" id="destination" required>
                </div>
                <div class="input-field">
                    <label for="input-date">Tanggal</label>
                    <hr>
                    <div id="input-date">
                        <input type="date" id="startdate" required>
                        <input type="date" id="enddate">
                    </div>
                </div>
                <div class="input-field">
                    <label for="transportation">Pilihan Transportasi</label>
                    <hr>
                    <select name="transportation" id="transportation">
                        <option value="0" selected>Tidak Ada</option>
                        <option value="1">Pesawat</option>
                        <option value="2">Kereta Api</option>
                        <option value="3">Mobil</option>
                    </select>
                </div>
                <div class="mulai-btn">
                    <a href="{{route('holiday.plan')}}">Mulai Rencana</a>
                </div>
            </div>
        </div>
        <div class="right">
            <img src="{{asset('images/img-view.png')}}" alt="">
        </div>
   </section>
</body>
</html>