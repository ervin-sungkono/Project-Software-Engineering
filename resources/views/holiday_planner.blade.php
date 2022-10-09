<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{asset('images/logo-easytrip-icon.png')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/holiday-planner.css')}}">
    <link rel="stylesheet" href="{{asset('css/product.css')}}" />

    <title>EasyTrip | Holiday Planner</title>
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
    <section class="banner-image">
        <div class="container">
            <div class="title">
                <h3>Perjalanan ke Yogyakarta</h3>
                <p>21/02/22 - 25/02/22</p>
            </div>
        </div>
    </section>
    <section class="destination-list" style="margin-bottom: 80px;">
        <div class="container">
            <h3 style="font-weight: bold; font-family: 'Inter', sans-serif; margin-bottom: 16px;">Tempat yang ingin dikunjungi</h3>
            <div class="chosen-destination-wrapper" style="display: flex; overflow-x: scroll;">
                @foreach ($holidays as $holiday)
                    @if ($holiday->is_picked)
                    <div class="card__custom" style="min-width: 284px; height: 380px;">
                        <div class="card__custom--header">
                            <a href="{{route('holiday.detail', ['id'=>$holiday->id])}}">
                                <img
                                src="{{asset('images/storage/background.jpg')}}"
                                alt="Image"
                                />
                            </a>
                        </div>
                        <div class="card__custom--body">
                            <h4>{{$holiday->holiday_name}}</h4>
                            <div class="d-flex align-items-center">
                                <img
                                    width="24"
                                    height="24"
                                    src="{{asset('images/location.svg')}}"
                                    alt="Location"
                                />
                                <p>&nbsp; {{$holiday->location}}</p>
                            </div>
                            <div class="d-flex my-3">
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="ml-1 ">&nbsp;{{$holiday->rating}}/5</span>
                                <span class="more">  205 Ulasan </span>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
            <h3 style="font-weight: bold; font-family: 'Inter', sans-serif; margin-top: 32px; margin-bottom: 16px;">Rekomendasi Tempat</h3>
            <div class="destination-wrapper" style="display: flex; overflow-x: scroll;">
                @foreach ($holidays as $holiday)
                    @if (!$holiday->is_picked)
                        <form method="POST" action="{{route('edit.plan', ['id'=>$holiday->id])}}" style="display:flex; align-items: center; gap: 1.5rem; padding: 1.25rem 2.5rem; border: 1px solid black; border-radius: 12px;margin-right: 32px;">
                        @csrf
                        @method('patch')
                            <p style="margin:0; font-weight: bold; width: 180px;">{{$holiday->holiday_name}}</p>
                            <button type="submit" style="padding: 0.5rem; background-color: var(--yellow); cursor: pointer; border-radius: 8px 8px 8px 0px; border:none;">+</button>
                        </form>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <hr>
    <section class="notes-section" style="margin-top: 80px;">
        <div class="container">
            <div class="title" style="display: flex; align-items: center; justify-content: space-between;">
                <h3>Catatan Perjalanan</h3>
                <a href="/notes/create">Tambah Catatan</a>
            </div>
            <div class="notes-wrapper" style="display: flex; flex-direction: column; gap: 24px; min-height: 300px;">
                @foreach ($notes as $note)
                    <div class="note" style="padding: 1rem 2rem; border: 1px solid black; border-radius: 12px;">
                        <h4>{{$note->title}}</h4>
                        <p style="margin-top: 24px;">{{$note->notes}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <hr>
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