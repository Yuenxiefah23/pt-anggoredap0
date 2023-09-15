
<?php
include 'koneksi.php';
$id = $_GET['data'];

$result_id = mysqli_query($conn, "SELECT * FROM tbl_barang WHERE id=$id");

$row = mysqli_fetch_assoc($result_id);

// $query="SELECT * FROM tbl_barang ORDER BY id DESC";
// $result=mysqli_query($conn,$query);
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
    <link rel="stylesheet" href="css/styledetail.css" />
  </head>

  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">ANGGOREDAP<span>GROUP</span>.</a>

      <div class="navbar-nav">
      <a href="index.php#home">Home</a>
        <a href="index.php#about">Tentang Kami</a>
        <a href="index.php#menu">Profile</a>
        <a href="index.php#products">Produk</a>
        <a href="index.php#contact">Kontak</a>
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

      
    </nav>
    <!-- Navbar end -->

    
    <!-- Products Section start -->
    <section class="product-detail" id="product-detail">
      <div class="kotak-modal">
        <div class="gambar">
          <img src="img/products/<?= $row['gambar'] ?>" alt="">
        </div>
        <div class="kotak-text">
        <div class="judul">
          <h3><?= $row['nama_barang'] ?></h3>
        </div>
        <div class="icon-bintang">
        <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star"></i>
        </div>
        <div class="deskripsi">
          <p><?= $row['deskripsi'] ?></p>
        </div>
        <div class="item-price"><strong>IDR <?= $row['harga'] ?></strong></div>
        <a href="https://wa.me/85336305649">
        <div class="btn">chek out</div>
        

        </a>
        </div>
      </div>
    </section>
    <!-- Products Section end -->

    
    <!-- Footer start -->
    <footer>
      <div class="socials">
      <a href="https://wa.me/85336305649"><i data-feather="message-circle"></i></a>
        <a href="Anggoredapnapoksgroup@gmail.com"><i data-feather="mail"></i></a>
        <a href="https://www.facebook.com/henny.zannykaito?mibextid=ZbWKwL"><i data-feather="facebook"></i></a>
        <a href="https://instagram.com/pt_anggoredap?igshid=NTc4MTIwNjQ2YQ=="><i data-feather="instagram"></i></a>
      </div>

      <div class="links">
      <a href="index.php#home">Home</a>
        <a href="index.php#about">Mission & Vision</a>
        <a href="index.php#menu">Profile</a>
        <a href="index.php#products">Produk</a>
        <a href="index.php#contact">Kontak</a>
        
      </div>

      <div class="credit">
        <p>Created by <a href="">KHAFIFAHHIDAYATI</a>. | &copy; 2023.</p>
      </div>
    </footer>
    <!-- Footer end -->

    <!-- Modal Box Item Detail start -->
   

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>

    <!-- Modal Box Item Detail end -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
