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
      href="https://sachinchoolur.github.io/lightslider/dist/css/lightslider.css"
    />
    <link rel="shortcut icon" href="{{asset('images/logo-easytrip-icon.png')}}" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    />

    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}" />
    <link rel="stylesheet" href="{{asset('css/product-detail.css')}}" />

    <link rel="stylesheet" href="{{asset('css/footer.css')}}" />

    <title>EasyTrip | Product Detail</title>
  </head>
  <body>
    <section class="product__detail--section">
      <div class="container-fluid mt-2 mb-3 justify-content-center">
        <div class="row no-gutters pl-2">
          <div class="col-md-1"></div>
          <a href="/product" class="back-button">
            < Kembali ke pencarian</a
          >
        </div>
        <div class="row no-gutters">
          <div class="col-md-1"></div>

          <div class="col-lg-6 pr-2">
            <div class="product__card card">
              <div class="demo">
                <ul id="lightSlider">
                  <li data-thumb="{{asset('images/storage/background.jpg')}}">
                    <img src="{{asset('images/storage/background.jpg')}}" />
                  </li>
                  <li data-thumb="{{asset('images/storage/background.jpg')}}">
                    <img src="{{asset('images/storage/background.jpg')}}" />
                  </li>
                  <li data-thumb="{{asset('images/storage/background.jpg')}}">
                    <img src="{{asset('images/storage/background.jpg')}}" />
                  </li>
                  <li data-thumb="{{asset('images/storage/background.jpg')}}">
                    <img src="{{asset('images/storage/background.jpg')}}" />
                  </li>
                  <li data-thumb="{{asset('images/storage/background.jpg')}}">
                    <img src="{{asset('images/storage/background.jpg')}}" />
                  </li>
                  <li data-thumb="{{asset('images/storage/background.jpg')}}">
                    <img src="{{asset('images/storage/background.jpg')}}" />
                  </li>
                </ul>
              </div>
            </div>
            <div class="product__review card mt-2">
              <div
                class="d-flex flex-row justify-content-between align-items-center"
              >
                <div class="product__review--info">
                  <h3>Ulasan</h3>
                  <div class="d-flex flex-row">
                    <div class="stars">
                      <i class="fa fa-star"></i>
                    </div>
                    <span class="ml-1 font-weight-bold">4.6/5</span>
                    <span class="more"> Dari 205 Ulasan </span>
                  </div>
                </div>
                <a href="#" class="another_review">Lihat ulasan lainnya</a>
              </div>
              <hr />
              <div class="comment-section">
                <div class="row js-slick-carousel">
                  <div class="col">
                    <div class="comment-card card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <div>
                            <h5 class="card-title">John Doe</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                              2 Maret 2022
                            </h6>
                          </div>
                          <div class="d-flex">
                            <div class="stars">
                              <i class="fa fa-star"></i>
                            </div>
                            <span class="ml-1 font-weight-bold">4.6/5</span>
                          </div>
                        </div>
                        <hr />
                        <p class="card-text">
                          Some quick example text to build on the card title and
                          make up the bulk of the card's content.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="comment-card card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <div>
                            <h5 class="card-title">John Doe</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                              2 Maret 2022
                            </h6>
                          </div>
                          <div class="d-flex">
                            <div class="stars">
                              <i class="fa fa-star"></i>
                            </div>
                            <span class="ml-1 font-weight-bold">4.6/5</span>
                          </div>
                        </div>
                        <hr />
                        <p class="card-text">
                          Some quick example text to build on the card title and
                          make up the bulk of the card's content.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="comment-card card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <div>
                            <h5 class="card-title">John Doe</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                              2 Maret 2022
                            </h6>
                          </div>
                          <div class="d-flex">
                            <div class="stars">
                              <i class="fa fa-star"></i>
                            </div>
                            <span class="ml-1 font-weight-bold">4.6/5</span>
                          </div>
                        </div>
                        <hr />
                        <p class="card-text">
                          Some quick example text to build on the card title and
                          make up the bulk of the card's content.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 pl-4">
            <div class="card product-header">
              <div class="about">
                <span class="category-place">Tempat Wisata </span>
                <h1 class="header-title">{{$holiday->holiday_name}}</h1>
              </div>
              <div class="product-description">
                <div class="mt-2">
                  <p>
                    {{$holiday->description}}
                  </p>
                </div>
              </div>
            </div>
            <div class="card__info">
              <div class="card__info__place card">
                <div class="card_border">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                      <img
                        width="24"
                        height="24"
                        src="{{asset('images/location.svg')}}"
                        alt=""
                      />
                      <p>&nbsp; {{$holiday->location}}</p>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                      <img
                        width="24"
                        height="24"
                        src="{{asset('images/clock.svg')}}"
                        alt=""
                      />
                      <p class="font-weight-bold">&nbsp; Buka -></p>
                      <p>&nbsp; 08.00 - 17.00</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card__info__price card">
                <h2>Harga Tiket</h2>
                <div class="card_border">
                  <div class="card-body">
                    <h5 class="card-title">IDR 5.000<span>/orang</span></h5>
                    <p class="card-text badge-ticket">Tiket Tersedia</p>
                    <a href="#" class="btn button-ticket d-block mt-3"
                      >Beli Tiket
                      <img
                        width="24"
                        height="24"
                        src="{{asset('images/ticket.svg')}}"
                        alt="Ticket"
                      />
                    </a>
                  </div>
                </div>
              </div>
            </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.1/jquery.flexslider.js"></script>
    <script>
      $("#lightSlider").lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 5,
      });

      const slickSettings = {
        arrows: false,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            },
          },
        ],
      };

      // $('.js-slick-carousel').on('init', handleSlickInit);
      $(".js-slick-carousel").slick(slickSettings);

      // reinitialization
      $(".js-slick-carousel").on("reInit", () =>
        console.log("slick re-init fired")
      );
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

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
  </body>
</html>
