<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{asset('images/logo-easytrip-icon.png')}}" type="image/x-icon">

    <title>EasyTrip | Beranda</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/landing-page.css')}}">
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
                <a href="/" class="active">Beranda</a>
                <a href="/product">Pesan Tiket</a>
                <a href="{{route('holiday.planner')}}">Holiday Planner</a>
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
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>Melayani <span>kebutuhan perjalanan</span> anda.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <div class="button-wrapper">
                    <a href="{{route('holiday.planner')}}" id="holiday-planner-btn">Buat Perencanaan</a>
                    <a href="#Promo" id="promo-btn">Lihat Promo</a>
                </div>
            </div>
            <form action="/product" class="hero-form">
                <div class="form-wrapper">
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
                        <label for="numOfPerson">Jumlah Orang</label>
                        <hr>
                        <input type="number" id="numOfPerson" required min="0">
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
                </div>
                <button type="submit">Cari</button>
            </form>
        </div>
    </section>
    <footer class="footer-section">
        <div class="container">
            <div class="footer-content">
                <a href="index.html">
                    <img src="{{asset('images/logo-easytrip-white.png')}}" alt="Logo EasyTrip">
                </a>
                <div class="contact-wrapper">
                    <a class="contact" href="https://whatsapp.com" target="_blank">
                        <img src="{{asset('images/icon-whatsapp-yellow.png')}}" alt="WhatsApp">
                        <div class="contact-details">
                            <h4>WhatsApp</h4>
                            <p>0812 XXXX XXX</p>
                        </div>
                    </a>
                    <a class="contact" href="mailto:cs@easytrip.com">
                        <img src="{{asset('images/icon-email-yellow.png')}}" alt="Email">
                        <div class="contact-details">
                            <h4>Email</h4>
                            <p>cs@easytrip.com</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="footer-content">
                <h3>Perusahaan</h3>
                <div class="footer-details">
                    <a href="#">Blog</a>
                    <a href="#">Karir</a>
                    <a href="#">Partner</a>
                    <a href="#">Membership</a>
                    <a href="#">Perlindungan</a>
                </div>
            </div>
            <div class="footer-content">
                <h3>Produk</h3>
                <div class="footer-details">
                    <a href="#">Tiket Pesawat</a>
                    <a href="#">Tiket Kereta Api</a>
                    <a href="#">Sewa Mobil</a>
                    <a href="#">Hotel</a>
                    <a href="#">Tempat Wisata</a>
                </div>
            </div>
            <div class="footer-content">
                <h3>Dukungan</h3>
                <div class="footer-details">
                    <a href="#">Pusat Bantuan</a>
                    <a href="#">Kebijakan Privasi</a>
                    <a href="#">Syarat dan Ketentuan</a>
                    <a href="#">Daftarkan Hotel Anda</a>
                    <a href="#">Daftarkan Event Anda</a>
                </div>
            </div>
            <div class="footer-content">
                <h3>Download Aplikasi</h3>
                <a href="https://play.google.com/" target="_blank">
                    <img src="{{asset('images/icon-googleplay.png')}}" alt="Google Play">
                </a>
            </div>
        </div>
    </footer>
</body>
</html>
