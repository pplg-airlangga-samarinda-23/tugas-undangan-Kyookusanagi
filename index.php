<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Undangan Pernikahan</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link rel="stylesheet" href="style.css" />
    <script type="module" src="script.js"></script>
  </head>
  <body>
    <!------------------------- NAVIGASI ------------------------->
    <nav class="navbar">
      <div class="navbar_wrapper">
        <h1 class="brand">Weeding Party!</h1>
        <menu class="navbar_menu">
          <a href="#akad">Undangan</a>
          <a href="#resepsi">Lokasi acara</a>
          <a href="#buku_tamu ">Buku Tamu</a>
          <a href="#map">Map</a>
          <a href="#gallery">Gallery</a>
        </menu>
      </div>
    </nav>
    <!------------------------- END NAVIGASI ------------------------->

    <!------------------------- HERO ------------------------->
    <div class="hero">
      <h2>Weeding Party!</h2>
      <h1>Meow Meow</h1>
      <h3>Samarinda, 11 Desember 2024</h3>
    </div>
    <!------------------------- END HERO ------------------------->

    <!------------------------- SECTION AKAD ------------------------->
    <section id="akad">
      <div class="bingkai">
        <div class="line"></div>
        <h1>Undangan</h1>
        <div class="line"></div>
      </div>
      <div class="invitation">
        <div class="header">
            <h2>dengan segala kerendahan hati dan dengan ungkapan syukur  atas karunia Tuhan,kami mengundang saudara/i untuk menghadiri Acara ulang tahun saya:</h2>
        </div>        
    </div>            
        <section class="akad_img"></section>       
      </div>
      
    </section>   
    <!------------------------- SECTION RESEPSI ------------------------->
    <section id="resepsi">
      <div class="bingkai">
        <div class="line"></div>
        <h1>Pemberkatan</h1>
        <div class="line"></div>
      </div>
      <div class="section_wrap wrap">
        <section class="resepsi_img"></section>
        <div class="section_container_resepsi">
          <h3>Acara:</h3>
          <p>Rabu,11 Desember 2024</p>
          <p>Pukul: 09.00 WITA s/d selesai</p>
          <p>Jl. Untung Suropati No.8, Karang Asam Ulu, Kec. Sungai Kunjang,</p>
          <p>Kota Samarinda, Kalimantan Timur 75243</p>
        </div>
      </div>
    </section>


    <!------------------------- END SECTION RESEPSI ------------------------->


    <!------------------------- SECTION BUKU TAMU ------------------------->
    <form action="insert.php" method="post">
            <input type="text" name="nama" placeholder="Nama" required> <br>
            <textarea name="ucapan" cols="30" rows="4" placeholder="Ucapan" required></textarea> <br>
            <select name="keterangan" required>
                <option value="" selected disabled hidden>Konfirmasi Kehadiran</option> 
                <option value="1">Ya</option>
                <option value="2">Tidak Hadir</option>
                <option value="3">Tidak Tahu</option>
            </select> <br>
            <button type="submit">KIRIM</button>
        </form>
        <?php
    $sql = "SELECT * FROM bukutamu ORDER BY id DESC";
    $hasil = $connection->query($sql);

        ?>
    <div style="height:100px; width:200px; overflow: auto;">
        <?php
        while($baris = $hasil->fetch_row()){
        ?>
        <div style="border-style:solid; border-color:red; margin: 10px;">
            <p style="font-weight:bold"><?= $baris[1] ?></p>
            <p><?=$baris[2] ?></p>
        </div>

    <?php
    }
    $hasil->free_result();
    ?>
</div>

        
    </body>
</html>


    <!------------------------- END SECTION BUKU TAMU ------------------------->

    <!------------------------- SECTION MAP ------------------------->
    <section id="map">
      <div class="bingkai">
        <div class="line"></div>
        <h1>Map</h1>
        <div class="line"></div>
      </div>
      <div class="section_wrap wrap">
        <section class="image.png">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3792.245662364142!2d117.1132344!3d-0.5259356!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67fbed3490ba5%3A0xdea1fd303d780d64!2sFUGO%20Hotel%20Samarinda!5e1!3m2!1sid!2sid!4v1725194690836!5m2!1sid!2sid"
            width="500" 
            height="350" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
      </div>
    </section>
    <!------------------------- END SECTION MAP ------------------------->

    <!------------------------- SECTION GALLERY ------------------------->
    <section id="gallery">
      <div class="bingkai">
        <div class="line"></div>
        <h1>Gallery</h1>
        <div class="line"></div>
      </div>
      <div class="selector_wrapper">
        <div class="gallery_list">
          <img
            src="https://i.pinimg.com/564x/8e/47/3e/8e473ed665ed5fe89a8b65cb8e50c5ca.jpg"
            alt="gallery"
          />
          <img
            src="https://images.unsplash.com/photo-1623428454614-abaf00244e52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
          />
        </div>
        <div class="gallery_list">
          <img
            src="https://i.pinimg.com/564x/b2/a7/af/b2a7af8147ec024b6aeb4fe80fa35c4f.jpg"
          />
          <img
            src="https://i.pinimg.com/564x/c6/9e/93/c69e939e951e02a6031723c131c908fa.jpg"
            alt="gallery"
          />
        </div>

        
      </div>
      <div class="family">
       <h4>Terima Kasih</h4>
       <p>Atas Kehadiran Bapak/i,Saudara/i</p>
        <p>dalam pernikahan kami yang sederhana.</p>
        <p>Kebersamaan Anda Membuat hari ini menjadi luar biasa.</p>
        

       
    </section>
</html>