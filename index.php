<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Restaurant</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Name: Restaurantly
  * URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">restaurantgarut@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+628652345</span></i>
        </div>
        <div class="languages d-none d-md-flex align-items-center">
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Restaurant Garoet</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#specials">Specials</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="#chefs">Chefs</a></li>
            <li><a href="#gallery">Gallery</a></li>
             <a class="nav-item nav-link" href="login.php">Login</a>
            <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-book-a-table d-none d-xl-block" href="#book-a-table">Book a Table</a>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start">
            <h2 data-aos="fade-up" data-aos-delay="100">Welcome to <span>Restaurant</span></h2>
            <p data-aos="fade-up" data-aos-delay="200">Menyajikan makanan lezat selama lebih dari 18 tahun!</p>
            <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
              <a href="#menu" class="cta-btn">Our Menu</a>
              <a href="#book-a-table" class="cta-btn">Book a Table</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">
      <div class="col-lg-6 order-1 order-lg-2">
        <img src="assets/img/about.jpg" class="img-fluid about-img" alt="">
      </div>
      <div class="col-lg-6 order-2 order-lg-1 content">
        
        <h3>Tempat Nyaman dengan Area Indoor & Outdoor</h3>
        
        <p class="fst-italic">
          Restoran kami menghadirkan suasana hangat dan nyaman, dipadukan dengan cita rasa hidangan yang menggugah selera.
          Setiap detail kami siapkan untuk memberikan pengalaman makan terbaik bagi setiap pelanggan.
        </p>

        <ul>
          <li><i class="bi bi-check2-all"></i> <span>Area yang luas dan cocok untuk keluarga maupun acara spesial.</span></li>
          <li><i class="bi bi-check2-all"></i> <span>Tempat yang nyaman untuk nongkrong, belajar, atau meeting santai.</span></li>
          <li><i class="bi bi-check2-all"></i> 
            <span>Harga ramah di kantong dengan pelayanan ramah dan profesional.</span>
          </li>
        </ul>

        <p>
          Kami selalu berkomitmen menyajikan hidangan berkualitas dengan pelayanan yang cepat dan sopan. 
          Dengan suasana yang cozy dan menu yang beragam, restoran kami menjadi pilihan tepat untuk bersantai 
          maupun menikmati makan bersama orang-orang terdekat.
        </p>

      </div>
    </div>

  </div>

</section>


    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

      <!-- End Section Title -->

      <div class="container section-title" data-aos="fade-up">
    <h2>WHY US</h2>
    <p>Why Choose Our Restaurant</p>
</div>

<div class="container">
    <div class="row gy-4">

        <!-- Card 01 -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
                <span>01</span>
                <h4><a href="#" class="stretched-link">Tentang Kami</a></h4>
                <p>Kami adalah restoran yang menghadirkan hidangan berkualitas dengan cita rasa autentik. 
                   Setiap menu dipersiapkan dengan bahan segar dan standar terbaik demi memberikan pengalaman makan yang tak terlupakan.</p>
            </div>
        </div>

        <!-- Card 02 -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
                <span>02</span>
                <h4><a href="#" class="stretched-link">Keunggulan Kami</a></h4>
                <p>Kami berkomitmen menyajikan hidangan yang lezat, higienis, serta pelayanan yang ramah. 
                   Suasana nyaman membuat restoran kami pilihan tepat bagi keluarga maupun teman.</p>
            </div>
        </div>
        <!-- Card 03 -->
<div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
    <div class="card-item">
        <span>03</span>
        <h4><a href="#" class="stretched-link">Kelezatan Premium</a></h4>
        <p>Setiap hidangan dibuat oleh koki berpengalaman menggunakan bahan-bahan pilihan. 
           Kami selalu menjaga kualitas rasa agar setiap pelanggan mendapatkan pengalaman kuliner terbaik 
           di setiap kunjungan.</p>
    </div>
</div>


    </div>
</div>

    </section><!-- /Why Us Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
    <h2>Menu</h2>
    <p>Temukan Menu Lezat di Restoran Garoet</p>
</div><!-- End Section Title -->

<div class="container isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

  <div class="row" data-aos="fade-up" data-aos-delay="100">
    <div class="col-lg-12 d-flex justify-content-center">
      <ul class="menu-filters isotope-filters">
        <li data-filter="*" class="filter-active">Semua</li>
        <li data-filter=".filter-starters">Pembuka</li>
        <li data-filter=".filter-salads">Salad</li>
        <li data-filter=".filter-specialty">Spesial</li>
      </ul>
    </div>
  </div><!-- Menu Filters -->

  <div class="row isotope-container" data-aos="fade-up" data-aos-delay="200">

    <div class="col-lg-6 menu-item isotope-item filter-starters">
      <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
      <div class="menu-content">
        <a href="#">Sup Lobster</a><span>Rp 59.000</span>
      </div>
      <div class="menu-ingredients">
        Sup lobster creamy dengan rempah pilihan, pembuka selera yang sempurna.
      </div>
    </div><!-- Menu Item -->

    <div class="col-lg-6 menu-item isotope-item filter-specialty">
      <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
      <div class="menu-content">
        <a href="#">Roti Panggang Spesial</a><span>Rp 49.000</span>
      </div>
      <div class="menu-ingredients">
        Roti panggang hangat dengan mentega spesial, teman sup atau salad.
      </div>
    </div><!-- Menu Item -->

    <div class="col-lg-6 menu-item isotope-item filter-starters">
      <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
      <div class="menu-content">
        <a href="#">Kue Kepiting</a><span>Rp 79.000</span>
      </div>
      <div class="menu-ingredients">
        Kue kepiting disajikan di roti panggang dengan saus tartar spesial.
      </div>
    </div><!-- Menu Item -->

    <div class="col-lg-6 menu-item isotope-item filter-salads">
      <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
      <div class="menu-content">
        <a href="#">Caesar Salad</a><span>Rp 89.000</span>
      </div>
      <div class="menu-ingredients">
        Salad segar dengan selada, crouton, keju parmesan, dan saus Caesar khas.
      </div>
    </div><!-- Menu Item -->

    <div class="col-lg-6 menu-item isotope-item filter-specialty">
      <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
      <div class="menu-content">
        <a href="#">Ayam Tuscan Panggang</a><span>Rp 99.000</span>
      </div>
      <div class="menu-ingredients">
        Ayam panggang dengan keju provolone, artichoke, dan saus pesto panggang.
      </div>
    </div><!-- Menu Item -->

    <div class="col-lg-6 menu-item isotope-item filter-starters">
      <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
      <div class="menu-content">
        <a href="#">Mozzarella Goreng</a><span>Rp 49.000</span>
      </div>
      <div class="menu-ingredients">
        Mozzarella goreng renyah, sempurna sebagai camilan atau pembuka.
      </div>
    </div><!-- Menu Item -->

    <div class="col-lg-6 menu-item isotope-item filter-salads">
      <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
      <div class="menu-content">
        <a href="#">Greek Salad</a><span>Rp 95.000</span>
      </div>
      <div class="menu-ingredients">
        Salad segar dengan bayam, tomat, zaitun, dan dressing ala Yunani.
      </div>
    </div><!-- Menu Item -->

    <div class="col-lg-6 menu-item isotope-item filter-salads">
      <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
      <div class="menu-content">
        <a href="#">Spinach Salad</a><span>Rp 95.000</span>
      </div>
      <div class="menu-ingredients">
        Bayam segar dengan jamur, telur rebus, dan saus vinaigrette bacon hangat.
      </div>
    </div><!-- Menu Item -->

    <div class="col-lg-6 menu-item isotope-item filter-specialty">
      <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
      <div class="menu-content">
        <a href="#">Roti Lobster</a><span>Rp 129.000</span>
      </div>
      <div class="menu-ingredients">
        Roti dengan isi lobster segar, mayo, dan selada renyah, spesial untuk menu utama.
      </div>
    </div><!-- Menu Item -->

  </div>
</div>

          </div><!-- Menu Item -->

        </div><!-- Menu Container -->

      </div>

    </section><!-- /Menu Section -->

    <!-- Specials Section -->
    <section id="specials" class="specials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Specials</h2>
        <p>Check Our Specials</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row">
    <div class="col-lg-3">
      <ul class="nav nav-tabs flex-column">
        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" href="#specials-tab-1">Signature Dish</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-2">Menu Favorit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-3">Chef Recommendation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-4">Seasonal Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-5">Dessert Spesial</a>
        </li>
      </ul>
    </div>

    <div class="col-lg-9 mt-4 mt-lg-0">
      <div class="tab-content">

        <!-- TAB 1 -->
        <div class="tab-pane active show" id="specials-tab-1">
          <div class="row">
            <div class="col-lg-8 details order-2 order-lg-1">
              <h3>Signature Dish – Racikan Rasa Terbaik Kami</h3>
              <p class="fst-italic">
                Hidangan unggulan yang dibuat dari bahan-bahan pilihan dan disajikan dengan cita rasa khas restoran kami.
              </p>
              <p>
                Setiap piring dibuat dengan perhatian penuh, menggabungkan teknik memasak modern dan bahan segar berkualitas. 
                Signature dish kami menjadi favorit pelanggan karena kelezatan dan aroma yang menggugah selera.
              </p>
            </div>
            <div class="col-lg-4 text-center order-1 order-lg-2">
              <img src="assets/img/specials-1.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>

        <!-- TAB 2 -->
        <div class="tab-pane" id="specials-tab-2">
          <div class="row">
            <div class="col-lg-8 details order-2 order-lg-1">
              <h3>Menu Favorit – Paling Banyak Dipesan</h3>
              <p class="fst-italic">
                Pilihan menu yang selalu menjadi favorit pelanggan setiap hari.
              </p>
              <p>
                Setiap hidangan pada kategori ini telah melalui proses penyempurnaan rasa, sehingga menghadirkan pengalaman makan yang memuaskan. 
                Cocok untuk dinikmati bersama keluarga maupun teman.
              </p>
            </div>
            <div class="col-lg-4 text-center order-1 order-lg-2">
              <img src="assets/img/specials-2.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>

        <!-- TAB 3 -->
        <div class="tab-pane" id="specials-tab-3">
          <div class="row">
            <div class="col-lg-8 details order-2 order-lg-1">
              <h3>Chef Recommendation – Pilihan Koki Terbaik</h3>
              <p class="fst-italic">
                Hidangan khusus yang direkomendasikan langsung oleh chef kami.
              </p>
              <p>
                Dipersiapkan dengan teknik memasak premium, menu ini menonjolkan rasa autentik dan tampilan yang menggugah selera.
                Sangat cocok bagi kamu yang ingin mencoba sesuatu yang berbeda dan istimewa.
              </p>
            </div>
            <div class="col-lg-4 text-center order-1 order-lg-2">
              <img src="assets/img/specials-3.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>

        <!-- TAB 4 -->
        <div class="tab-pane" id="specials-tab-4">
          <div class="row">
            <div class="col-lg-8 details order-2 order-lg-1">
              <h3>Seasonal Menu – Hidangan Edisi Terbatas</h3>
              <p class="fst-italic">
                Menu khusus yang hanya tersedia pada musim atau periode tertentu.
              </p>
              <p>
                Bahan-bahan segar dipilih berdasarkan musimnya, menghadirkan rasa yang unik dan berbeda dari menu reguler. 
                Jangan lewatkan kesempatan untuk mencoba menu edisi terbatas ini sebelum habis!
              </p>
            </div>
            <div class="col-lg-4 text-center order-1 order-lg-2">
              <img src="assets/img/specials-4.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>

        <!-- TAB 5 -->
        <div class="tab-pane" id="specials-tab-5">
          <div class="row">
            <div class="col-lg-8 details order-2 order-lg-1">
              <h3>Dessert Spesial – Manis yang Bikin Ketagihan</h3>
              <p class="fst-italic">
                Hidangan penutup spesial buatan chef pastry kami.
              </p>
              <p>
                Tekstur lembut, rasa manis yang pas, serta tampilan elegan menjadikan dessert ini penutup yang sempurna untuk melengkapi pengalaman makan Anda.
              </p>
            </div>
            <div class="col-lg-4 text-center order-1 order-lg-2">
              <img src="assets/img/specials-5.png" alt="" class="img-fluid">
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</div>


    </section><!-- /Specials Section -->

    <!-- Events Section -->
    <section id="events" class="events section">

      <img class="slider-bg" src="assets/img/events-bg.jpg" alt="" data-aos="fade-in">

      <div class="container">

        <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="assets/img/events-slider/events-slider-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
  <h3>Paket Ulang Tahun</h3>
  <div class="price">
    <p><span>Rp 1.899.000</span></p>
  </div>

  <p class="fst-italic">
    Rayakan momen spesial ulang tahun bersama keluarga dan teman dengan hidangan lezat dan suasana yang hangat di restoran kami.
  </p>

  <ul>
    <li><i class="bi bi-check2-circle"></i> <span>Dekorasi sederhana namun elegan untuk acara ulang tahun.</span></li>
    <li><i class="bi bi-check2-circle"></i> <span>Pilihan menu khusus yang bisa disesuaikan dengan selera.</span></li>
    <li><i class="bi bi-check2-circle"></i> <span>Pelayanan ramah yang siap membantu selama acara berlangsung.</span></li>
  </ul>

  <p>
    Kami memastikan setiap detail dipersiapkan dengan baik sehingga acara ulang tahun Anda terasa lebih istimewa,
    berkesan, dan penuh kebahagiaan.
  </p>
</div>
</div>
</div><!-- End Slider item -->

<div class="swiper-slide">
<div class="row gy-4 event-item">
  <div class="col-lg-6">
    <img src="assets/img/events-slider/events-slider-2.jpg" class="img-fluid" alt="">
  </div>

  <div class="col-lg-6 pt-4 pt-lg-0 content">
    <h3>Paket Acara Private</h3>
    <div class="price">
      <p><span>Rp 2.900.000</span></p>
    </div>

    <p class="fst-italic">
      Nikmati suasana eksklusif untuk acara private seperti reuni, arisan, gathering kantor, atau makan malam spesial.
    </p>

    <ul>
      <li><i class="bi bi-check2-circle"></i> <span>Area khusus yang nyaman dan terjaga privasinya.</span></li>
      <li><i class="bi bi-check2-circle"></i> <span>Menu spesial yang dapat di-custom untuk kebutuhan acara.</span></li>
      <li><i class="bi bi-check2-circle"></i> <span>Tim profesional siap membantu dari awal hingga akhir acara.</span></li>
    </ul>

    <p>
      Dengan suasana premium dan pelayanan terbaik, restoran kami menjadi pilihan ideal untuk mengadakan acara private
      yang berkesan dan penuh kenyamanan.
    </p>
  </div>
</div>

            </div><!-- End Slider item -->

            <div class="swiper-slide">
              <div class="row gy-4 event-item">
                <div class="col-lg-6">
                  <img src="assets/img/events-slider/events-slider-3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
  <h3>Custom Parties</h3>
  <div class="price">
    <p><span>Rp 990.000</span></p>
  </div>

  <p class="fst-italic">
    Wujudkan acara impian Anda dengan konsep yang bisa disesuaikan. Restoran kami menyediakan paket Custom Parties
    yang fleksibel untuk berbagai kebutuhan acara.
  </p>

  <ul>
    <li><i class="bi bi-check2-circle"></i> 
      <span>Pilihan konsep acara: romantis, casual, formal, atau tematik sesuai permintaan.</span>
    </li>
    <li><i class="bi bi-check2-circle"></i> 
      <span>Menu dapat di-custom sesuai selera dan budget.</span>
    </li>
    <li><i class="bi bi-check2-circle"></i> 
      <span>Dekorasi dan layanan profesional untuk mendukung kelancaran acara.</span>
    </li>
  </ul>

  <p>
    Cocok untuk acara seperti anniversary, lamaran, gathering, launching produk, atau momen spesial lainnya.
    Kami siap membantu Anda menciptakan acara yang unik, berkesan, dan penuh kehangatan.
  </p>
</div>

            </div><!-- End Slider item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Events Section -->

    <!-- Book A Table Section -->
    <section id="book-a-table" class="book-a-table section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>RESERVASI</h2>
    <p>Pesan Meja di Restoran Garoet</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6">
          <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required="">
        </div>
        <div class="col-lg-4 col-md-6">
          <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" required="">
        </div>
        <div class="col-lg-4 col-md-6">
          <input type="text" class="form-control" name="phone" id="phone" placeholder="Nomor Telepon" required="">
        </div>
        <div class="col-lg-4 col-md-6">
          <input type="date" name="date" class="form-control" id="date" placeholder="Tanggal Reservasi" required="">
        </div>
        <div class="col-lg-4 col-md-6">
          <input type="time" class="form-control" name="time" id="time" placeholder="Waktu" required="">
        </div>
        <div class="col-lg-4 col-md-6">
          <input type="number" class="form-control" name="people" id="people" placeholder="Jumlah Tamu" required="">
        </div>
      </div>

      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Pesan / Permintaan Khusus"></textarea>
      </div>

      <div class="text-center mt-3">
        <div class="loading">Sedang Mengirim...</div>
        <div class="error-message"></div>
        <div class="sent-message">Permintaan reservasi Anda berhasil dikirim. Kami akan menghubungi Anda melalui telepon atau email untuk konfirmasi. Terima kasih telah memilih [NamaRestoran]!</div>
        <button type="submit" class="">Pesan Meja</button>
      </div>
    </form>

  </div>
</section>


        </form><!-- End Reservation Form -->

      </div>

    </section><!-- /Book A Table Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
    <h2>Testimoni Pelanggan</h2>
    <p>Apa kata mereka tentang restoran kami</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints='{ "320": { "slidesPerView": 1, "spaceBetween": 40 }, "1200": { "slidesPerView": 3, "spaceBetween": 40 } }'>
    <script type="application/json" class="swiper-config">
      {
        "loop": true,
        "speed": 600,
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": "auto",
        "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
        },
        "breakpoints": {
          "320": {
            "slidesPerView": 1,
            "spaceBetween": 40
          },
          "1200": {
            "slidesPerView": 3,
            "spaceBetween": 20
          }
        }
      }
    </script>

    <div class="swiper-wrapper">

      <!-- Testimoni 1 -->
      <div class="swiper-slide">
        <div class="testimonial-item">
          <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>Hidangan di restoran ini luar biasa! Suasana nyaman, pelayanannya ramah, dan setiap menu terasa istimewa. Pasti akan kembali lagi!</span>
            <i class="bi bi-quote quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
          <h3>Andi Prasetyo</h3>
          <h4>Pengunjung Setia</h4>
        </div>
      </div><!-- End testimonial item -->

      <!-- Testimoni 2 -->
      <div class="swiper-slide">
        <div class="testimonial-item">
          <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>Menu dessert-nya enak banget! Tempatnya cozy, cocok untuk kumpul keluarga atau teman. Sangat direkomendasikan.</span>
            <i class="bi bi-quote quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
          <h3>Sari Wulandari</h3>
          <h4>Food Enthusiast</h4>
        </div>
      </div><!-- End testimonial item -->

      <!-- Testimoni 3 -->
      <div class="swiper-slide">
        <div class="testimonial-item">
          <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>Pelayanan cepat dan ramah, menu makanannya fresh dan enak. Tempatnya juga bersih dan nyaman. Sangat puas!</span>
            <i class="bi bi-quote quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
          <h3>Rina susanti</h3>
          <h4>Customer</h4>
        </div>
      </div><!-- End testimonial item -->

      <!-- Testimoni 4 -->
      <div class="swiper-slide">
        <div class="testimonial-item">
          <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>Tempat yang nyaman untuk hangout. Hidangan lezat dan harga bersahabat. Cocok untuk kumpul bersama teman-teman.</span>
            <i class="bi bi-quote quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
          <h3>Budi santoso</h3>
          <h4>Pengunjung</h4>
        </div>
      </div><!-- End testimonial item -->

      <!-- Testimoni 5 -->
      <div class="swiper-slide">
        <div class="testimonial-item">
          <p>
            <i class="bi bi-quote quote-icon-left"></i>
            <span>Acara ulang tahun saya di restoran ini sukses! Dekorasi cantik, makanan lezat, dan staff sangat membantu. Sangat berkesan.</span>
            <i class="bi bi-quote quote-icon-right"></i>
          </p>
          <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
          <h3>Angga Yunanda</h3>
          <h4>Customer</h4>
        </div>
      </div><!-- End testimonial item -->

    </div>

    <div class="swiper-pagination"></div>
  </div>
</div>

            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p>Some photos from Our Restaurant</p>
      </div><!-- End Section Title -->

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/2da1f33f217b010aaaa686d76bf9a588.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/2da1f33f217b010aaaa686d76bf9a588.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/fb9781dd7f90506dbf32772227de878c.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/fb9781dd7f90506dbf32772227de878c.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/e12cb5bf6722cc47bfcf54562f777160.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/e12cb5bf6722cc47bfcf54562f777160.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/d918dd01305b9e88020be282efda2333.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/d918dd01305b9e88020be282efda2333.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Chefs Section -->
    <section id="chefs" class="chefs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Master Chef</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Patissier</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>Cook</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Chefs Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
  <h2>Kontak</h2>
  <p>Hubungi Restoran Kami</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-4">
      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
        <i class="bi bi-geo-alt flex-shrink-0"></i>
        <div>
          <h3>Alamat</h3>
          <p>Jl. Pasundan No.108, Garut, Jawa Barat 44151</p>
        </div>
      </div><!-- End Info Item -->

      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
        <i class="bi bi-clock flex-shrink-0"></i>
        <div>
          <h3>Jam Buka</h3>
          <p>Senin-Minggu:<br>10:00 - 22:00</p>
        </div>
      </div><!-- End Info Item -->

      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
        <i class="bi bi-telephone flex-shrink-0"></i>
        <div>
          <h3>Telepon</h3>
          <p>+62 8345 678 889</p>
        </div>
      </div><!-- End Info Item -->

      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
        <i class="bi bi-envelope flex-shrink-0"></i>
        <div>
          <h3>Email</h3>
          <p>restaurantgarut@gmail.com</p>
        </div>
      </div><!-- End Info Item -->

    </div>

    <div class="col-lg-8">
      <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Nama Anda" required>
          </div>

          <div class="col-md-6">
            <input type="email" class="form-control" name="email" placeholder="Email Anda" required>
          </div>

          <div class="col-md-12">
            <input type="text" class="form-control" name="subject" placeholder="Subjek" required>
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Pesan Anda" required></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Mengirim...</div>
            <div class="error-message"></div>
            <div class="sent-message">Pesan Anda berhasil dikirim. Terima kasih!</div>

            <button type="submit">Kirim Pesan</button>
          </div>

        </div>
      </form>
    </div>

  </div>
</div>

          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
  <div class="row gy-4">
    <div class="col-lg-4 col-md-6 footer-about">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="sitename">Restoran Garut</span>
      </a>
      <div class="footer-contact pt-3">
        <p>Ratna</p>
        <p>Garut, Jl. Pasundan</p>
        <p class="mt-3"><strong>Phone:</strong> <span>+62 345 875 67</span></p>
        <p><strong>Email:</strong> <span>restaurantgarut@gmail.com</span></p>
      </div>
      <div class="social-links d-flex mt-4">
        <a href="#"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Menuju Halaman</h4>
      <ul>
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Tentang Kami</a></li>
        <li><a href="#">Layanan</a></li>
        <li><a href="#">Syarat & Ketentuan</a></li>
        <li><a href="#">Kebijakan Privasi</a></li>
      </ul>
    </div>

    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Layanan Kami</h4>
      <ul>
        <li><a href="#">Pemesanan Meja</a></li>
        <li><a href="#">Catering</a></li>
        <li><a href="#">Event Khusus</a></li>
        <li><a href="#">Promosi</a></li>
        <li><a href="#">Layanan Antar</a></li>
      </ul>
    </div>

    <div class="col-lg-4 col-md-12 footer-newsletter">
      <h4>Newsletter</h4>
      <p>Daftar newsletter kami untuk mendapatkan info promo dan menu terbaru!</p>
      <form action="forms/newsletter.php" method="post" class="php-email-form">
        <div class="newsletter-form">
          <input type="email" name="email" placeholder="Masukkan Email Anda">
          <input type="submit" value="Daftar">
        </div>
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Terima kasih! Email Anda sudah terdaftar.</div>
      </form>
    </div>

  </div>
</div>

<div class="container copyright text-center mt-4">
  <p>© <span>Copyright</span> <strong class="px-1 sitename">Restoran Garut</strong> <span>All Rights Reserved</span></p>
  <div class="credits">
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
  </div>
</div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>