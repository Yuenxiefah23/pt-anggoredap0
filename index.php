
<?php
include 'koneksi.php';

$query = 'SELECT * FROM tbl_barang ORDER BY id DESC';
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT.ANGGOREDAP</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">PT.<span>ANGGOREDAP</span> GROUP</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Mission & Vision</a>
        <a href="#menu">Profile</a>
        <a href="#products">Produk</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search-button"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart-button"
          ><i data-feather="shopping-cart"></i
        ></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>

      <!-- Search Form start -->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="search here..." />
        <label for="search-box"><i data-feather="search"></i></label>
      </div>
      <!-- Search Form end -->

      <!-- Shopping Cart start -->
      <!-- Shopping Cart end -->
    </nav>
    <!-- Navbar end -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Welcome To PT Anggoredap<span>Group</span></h1>
        <p>INTERNASIONAL COMPANY SUPPLIER</p>
        <a href="https://wa.me/85336305649" class="cta">BELI SEKARANG</a>
      </main>
    </section>
    <!-- Hero Section end -->

    <!-- About Section start -->
    <section id="about" class="about">
      <h2><span>Mission</span> Vision</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/gam4.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Mission & Vision</h3>
          <p>
            Mission: Become A Companny Suplier Who Can Guarantee Quality By
            Always A Pre-production Sample Before Mass Production And By Always
            Final Inspaction Before Shipment
          </p>
          <p>
            Vision : To Maintain Ourselves In The Forefront Of Customer
            Satisfaction By Offering The Best Product White Timely Deliveries
          </p>
        </div>
      </div>
    </section>
    <!-- About Section end -->

    <!-- Menu Section start -->
    <section id="menu" class="menu">
      <h2><span>PRO</span>FILE</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita,
        repellendus numquam quam tempora voluptatum.
      </p>

      <div class="row">
        <div class="menu-card">
          <img src="img/menu/ser1.JPEG" alt="Espresso" class="menu-card-img" />
          <h3 class="menu-card-title">- About -</h3>
          <p class="menu-card-price">PT ANGGOREDAP NAPOKS GROUP PT. ANGGOREDAP NAPOKS GROUP IS A DYNAMIC TRADING COMPANY BASED IN EAST JAVA,
INDONESIA. WITH A STRONG FOCUS ON DELIVERING HIGH-QUALITY PRODUCTS AND SERVICES, WE HAVE ESTABLISHED
OURSELVES AS A RELIABLE AND TRUSTWORTHY PARTNER IN THE TRADING INDUSTRY. OUR DEDICATION TO EXCELLENCE,
COMBINED WITH OUR EXTENSIVE EXPERIENCE AND INDUSTRY KNOWLEDGE, SETS US APART FROM THE COMPETITION</p>
        </div>
        
        
       
    </section>
    <!-- Menu Section end -->

    <!-- Products Section start -->
    <section class="products" id="products">
      <h2><span>PROD</span>UCTS</h2>
      <p>produk yang kami jual sudah memenuhi label halal</p>

      <div class="row">
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div class="product-card">
          <div class="product-icons">
            
            <a href="detail.php?data=<?= $row[
                'id'
            ] ?>" class="item-detail-button"
              ><i data-feather="eye"></i
            ></a>
          </div>
       
          <div class="product-image">
            <img src="img/products/<?= $row['gambar'] ?>" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3><?= $row['nama_barang'] ?></h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star"></i>
            </div>
            <div class="product-price">IDR <?= $row[
                'harga'
            ] ?> <span></span></div>
          </div>
        </div>
    
    
        <?php endwhile; ?>
      </div>
    </section>
    <!-- Products Section end -->

    <!-- Contact Section start -->
    <section id="contact" class="contact">
      <h2><span>Kontak</span> Kami</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis,
        provident.
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9286.851159362175!2d115.27573089156509!3d-6.8384075535344815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2ddabddd17200c27%3A0xcb74ab2864e3b5f7!2sHouse%20of%20Napok&#39;s!5e0!3m2!1sid!2sid!4v1694614097693!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>
        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="no hp" />
          </div>
          <a href="https://wa.me/85336305649">
        <div class="btn">Information Ordering</div>
      </div>
    </section>
    <!-- Contact Section end -->

    <!-- Footer start -->
    <footer>
      <div class="socials">
        <a href="https://wa.me/85336305649"><i data-feather="message-circle"></i></a>
        <a href="Anggoredapnapoksgroup@gmail.com"><i data-feather="mail"></i></a>
        <a href="https://www.facebook.com/henny.zannykaito?mibextid=ZbWKwL"><i data-feather="facebook"></i></a>
        <a href="https://instagram.com/pt_anggoredap?igshid=NTc4MTIwNjQ2YQ=="><i data-feather="instagram"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Mission & Vision</a>
        <a href="#menu">Profile</a>
        <a href="#products">produk</a>
        <a href="#contact">Kontak</a>
       
      </div>

      <div class="credit">
        <p>Created by <a href="">KHAFIFAHHIDAYATI</a>. | &copy; 2023.</p>
      </div>
    </footer>
    <!-- Footer end -->

  

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
