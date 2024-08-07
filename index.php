<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hotel Website</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

   <header class="header">

      <a href="#" class="logo"></i> Hotel Nirwana </a>

      <nav class="navbar">
         <a href="#room">Kamar</a>
         <a href="#harga">Harga</a>
         <a href="#about">Tentang Kami</a>
         <a href="#reservation" class="btn">Pesan Kamar</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </header>


   <section class="home" id="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/home-slide1.png) no-repeat;">
               <div class="content">
                  <h3>Kenyamanan dan Kemewahan di Jantung Kota</h3>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-slide2.png) no-repeat;">
               <div class="content">
                  <h3>Menginap dengan Kemewahan, Pulang dengan Kenangan</h3>
               </div>
            </div>
         </div>

         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

      </div>

   </section>


   <section class="about" id="about">

      <div class="row">

         <div class="image">
            <img src="images/about.png" alt="">
         </div>

         <div class="content">
            <h3>Tentang Kami</h3>
            <p>Hotel Nirwana, tempat di mana kenyamanan dan kemewahan berpadu harmonis. Terletak strategis di jantung kota Jakarta, Hotel Nirwana adalah destinasi ideal bagi para wisatawan bisnis maupun liburan. Kami menawarkan berbagai fasilitas modern yang dirancang untuk memenuhi kebutuhan Anda dan memastikan pengalaman menginap yang tak terlupakan.</p>
            <p>Alamat <br> Hotel Nirwana <br> Jl. Sudirman No. 123, Jakarta Pusat, 10220</p>
            <p>Nomor Telepon <br> +62 21 1234 5678</p>
            <p>Alamat Email <br> info@hotelnirwana.com</p>
         </div>

      </div>

   </section>


   <section class="room" id="room">

      <h1 class="heading">Kamar</h1>

      <div class="swiper room-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/room-1.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Standar</h3>
                  <p>jenis kamar hotel yang paling dasar dan sering kali merupakan opsi yang paling terjangkau. Biasanya, kamar standar dilengkapi dengan fasilitas dasar seperti tempat tidur, meja, kursi, TV, dan kamar mandi. Ukurannya bervariasi, tetapi umumnya lebih kecil dibandingkan dengan tipe kamar lainnya. Meskipun lebih kecil, kamar ini tetap akan menjadi kamar yang nyaman untuk ditempati.</p>
                  <a href="#reservation" class="btn">Pesan Sekarang</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/room-2.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Deluxe</h3>
                  <p>Kamar deluxe menawarkan fasilitas dan kenyamanan tambahan dibandingkan kamar standar. Biasanya, kamar ini lebih luas, dengan perabotan yang lebih baik dan lebih banyak fasilitas seperti minibar, area duduk, dan peralatan mandi yang lebih mewah. Kamar deluxe sering kali terletak di lokasi yang lebih baik dalam hotel dan memberikan pemandangan yang lebih baik.</p>
                  <a href="#reservation" class="btn">Pesan Sekarang</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <img src="images/room-3.jpg" alt="">
               </div>
               <div class="content">
                  <h3>Family</h3>
                  <p>Kamar family dirancang khusus untuk keluarga atau kelompok besar. Kamar ini biasanya lebih luas dan dapat dilengkapi dengan beberapa tempat tidur atau area tidur tambahan. Fasilitas dalam kamar family sering kali mencakup ruang tamu terpisah, lebih banyak ruang penyimpanan, dan terkadang dapur kecil atau microwave untuk kenyamanan tambahan.</p>
                  <a href="#reservation" class="btn">Pesan Sekarang</a>
               </div>
            </div>
            


         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <section id="harga">
   <div style="margin: 40px auto;">
  <ul style="list-style: none; padding-left: 2em; padding-right: 2em; text-align: center;">
    <li style="vertical-align: middle; width: 31%; background-color: #ffffff; display: inline-block; padding: 0px 30px 40px; text-align: center; max-width: 320px; transition: all 0.3s ease; border-radius: 5px;">
      <h1 style="font-size: 1.6em; padding: 40px 0px; border-bottom: 2px solid #ebedec; letter-spacing: 0.03em;">Standar</h1>
      <p style="font-size: 3em; padding: 30px 0px; border-bottom: 2px solid #ebedec; line-height: 0.7;">
        <span style="font-size: 0.35em; vertical-align: top; letter-spacing: 0.15em;">Rp</span>
        <span>500,000</span>
        <span style="vertical-align: bottom; font-size: 0.30em; letter-spacing: 0.04em; padding-left: 0.2em;">Hari</span>
      </p>
    </li>
    <li style="vertical-align: middle; width: 31%; background-color: #ffffff; display: inline-block; padding: 0px 30px 40px; text-align: center; max-width: 320px; transition: all 0.3s ease; border-radius: 5px; position: relative;">
      <h1 style="font-size: 1.6em; padding: 40px 0px; border-bottom: 2px solid #ebedec; letter-spacing: 0.03em;">Deluxe</h1>
      <p style="font-size: 3em; padding: 30px 0px; border-bottom: 2px solid #ebedec; line-height: 0.7;">
        <span style="font-size: 0.35em; vertical-align: top; letter-spacing: 0.15em;">Rp</span>
        <span>800,000</span>
        <span style="vertical-align: bottom; font-size: 0.30em; letter-spacing: 0.04em; padding-left: 0.2em;">Hari</span>
      </p>
    </li>
    <li style="vertical-align: middle; width: 31%; background-color: #ffffff; display: inline-block; padding: 0px 30px 40px; text-align: center; max-width: 320px; transition: all 0.3s ease; border-radius: 5px;">
      <h1 style="font-size: 1.6em; padding: 40px 0px; border-bottom: 2px solid #ebedec; letter-spacing: 0.03em;">Family</h1>
      <p style="font-size: 3em; padding: 30px 0px; border-bottom: 2px solid #ebedec; line-height: 0.7;">
        <span style="font-size: 0.35em; vertical-align: top; letter-spacing: 0.15em;">Rp</span>
        <span>1,000,000</span>
        <span style="vertical-align: bottom; font-size: 0.30em; letter-spacing: 0.04em; padding-left: 0.2em;">Hari</span>
      </p>
    </li>
  </ul>
</div>

   </section>
   

    <?php include 'form.php'; ?>


   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

   <script src="script.js"></script>
   
   

</body>
</html>