<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css"
    />
    
    <link rel="shortcut icon" href="{{asset('images/logo-easytrip-icon.png')}}" type="image/x-icon">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/product.css')}}" />

    <link rel="stylesheet" href="{{asset('css/footer.css')}}" />

    <title>EasyTrip | Product</title>
  </head>
  <body>
    <nav
      id="navbar"
      class="navbar fixed-top navbar-expand-md justify-content-between"
    >
      <div class="container-fluid">
        <button
          class="navbar-toggler navbar-dark"
          type="button"
          data-toggle="collapse"
          data-target=".dual-nav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <div class="nav-logo">
                <a href="/">
                    <img src="{{asset('images/logo-easytrip.png')}}" alt="Logo EasyTrip">
                </a>
            </div>
            <div class="nav-menu left">
                <a href="/">Beranda</a>
                <a href="/product" class="active">Pesan Tiket</a>
                <a href="{{route('holiday.planner')}}">Holiday Planner</a>
            </div>
            <div class="nav-menu right">
                <div class="login-btn">
                    <a href="/login">Login</a>
                </div>
            </div>
        </div>
      </div>
    </nav>
    <section class="product-section">
      <div class="container-fluid d-md-flex align-items-stretch">
        <!-- sidebar -->
        <nav id="sidebar">
          <div class="p-4 pt-5">
            <h2>Jelajah berbagai tempat wisata.</h2>
            <div class="input-group">
              <input
                class="form-control py-2 border-right-0"
                type="search"
                placeholder="Search here.."
                id="example-search-input"
              />
              <span class="input-group-append">
                <div class="input-group-text bg-transparent">
                  <i class="fa fa-search"></i>
                </div>
              </span>
            </div>
            <hr />
            <h5>Kisaran Harga</h5>
            <div id="slider-range"></div>
            <p>
              <label for="amount"></label>
              <input
                type="text"
                id="amount"
                readonly
                style="border: 0; color: #3b4949cc; width: 100%"
              />
            </p>
            <hr />
            <h5>Urut beradasarkan</h5>
            <div class="radio-button">
              <form>
                <label>
                  <input type="radio" name="radio" checked />
                  <span>Harga (Tinggi ke Rendah)</span>
                </label>
                <label>
                  <input type="radio" name="radio" />
                  <span>Harga (Rendah ke Tinggi)</span>
                </label>
                <label>
                  <input type="radio" name="radio" />
                  <span>Nama Tempat (A-Z)</span>
                </label>
                <label>
                  <input type="radio" name="radio" />
                  <span>Rating</span>
                </label>
                <label>
                  <input type="radio" name="radio" />
                  <span>Jumlah Ulasan</span>
                </label>
              </form>
            </div>
          </div>
        </nav>
        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
          <div
            class="product__item row justify-content-center justify-content-md-start"
          >
          @foreach ($holidays as $holiday)
            <div class="card__custom">
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
                    <div class="price-info d-flex justify-content-between">
                        <p class="price-title">IDR {{$holiday->price}}</p>
                        <p class="price-status available">Tiket Tersedia</p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script src="{{asset('js/index.js')}}"></script>
    <script src="{{asset('js/product.js')}}"></script>
  </body>
</html>
