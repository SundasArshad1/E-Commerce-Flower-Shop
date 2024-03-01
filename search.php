<?php
  session_start();
?>
<html>
<head>
  <title>Search</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/areas.css" rel="stylesheet">
  <style>
    
    .buttn
    {
      background-color:#A3DF46;
      color:white;
      padding:10px;
      width:90%;
      margin-left:20px;
      margin-bottom:20px;
    }
  </style>

</head>


<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Orchid<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about us.html">About Us</a></li>
          <li class="dropdown"><a href="AreasWeServe.php"><span>Areas We Serve</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="Wedding.php">Wedding</a></li>
              <li><a href="Anniversery.php">Anniversery</a></li>
              <li><a href="Birthday.php">Birthday</a></li>
            </ul>
          </li>
          <li><a href="customize.php">Customize</a></li>
          <li><a href="FAQS.html">FAQS</a></li>
          <li><a href="privacy.html">Privacy Policy</a></li>
          <li><a href="Terms and Conditions.html">Term and Conditions</a></li>
            <li><a href="Blog.html">Blog</a></li>
          <li><a href="Contact Me.html">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->
      <form method="get" action="search.php">
        <input type="search" class="btn-book-a-table" placeholder="Search" name="search">
       </form>

    </div>
  </header>
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Enjoy Your Beautiful<br>Moments</h2>
          <p data-aos="fade-up" data-aos-delay="100">With our premiun bouquets</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="AreasWeServe.php" class="btn-book-a-table">Shop Now</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="images/main.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <?php
      $word = $_GET['search'];
      $dsn = "mysql:dbname=orchid_db";

      $username = "root";
      $password = "";

      try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }


        $sql = "SELECT Bouquet_Name, Product_No, Bouquet_Price, Bouquet_Img, Bouquet_Des FROM bouquet WHERE Bouquet_Des LIKE '%$word%' OR Bouquet_Name LIKE '%$word%'";

        try {
          $rows = $conn->query( $sql );
          $rowcount = $rows->rowCount();
          } catch ( PDOException $e ) 
          {
          echo "Query failed: " . $e->getMessage();
        }
  
         if($rowcount>0)
         {
          echo "<div style='font-size:20px;color:gray;font-weight:bold;'>$rowcount matches found</div>";

          $num = 0;
          echo "<div class='row'>"; 
  
          foreach ($rows as $row) {
            $product = $row['Product_No'];
            $img = $row['Bouquet_Img'];
            $price = $row['Bouquet_Price'];
            $name = $row['Bouquet_Name'];
            $description = $row['Bouquet_Des'];
            $data=array("Name"=>$name,"Price"=>$price,"Img"=>$img,"Des"=>$description,"PID"=>$product);
            echo "<div class='col-md-3' data-aos='fade-up'>";
            echo "<img src='" . $row['Bouquet_Img'] . "' width='100%' height='100px' class='img'> ";
            echo "<p class='img_des'>" . $row['Bouquet_Name'] . "</p>";
            echo "<hr width='90%' style='margin-left:20px'>";
            echo "<p class='img_des'>Rs. " . $row['Bouquet_Price'] . "</p>";
            echo "<hr width='90%' style='margin-left:20px'>";
            echo "<button type='button' class='buttn'><a href='Product.php?" . htmlspecialchars(http_build_query($data)) . "'>Order Now</a></button>";
            echo "</div>";

            $num++;
            if ($num % 4 === 0) {
                echo "</div>"; // Close the row container
                echo "<div class='row'>"; // Open a new row container
            }
          }

          echo "</div>"; 
         }
        
         else
         {
          echo "<table><tr><td align='center'style='font-size:30px;color:gray;font-weight:bold;'>No Matches Found</td></tr></table>";
        }
      
    
 ?>



  
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

  <div class="container">
    <div class="row gy-3">
      <div class="col-lg-3 col-md-6 d-flex">
        <i class="bi bi-geo-alt icon"></i>
        <div>
          <h4>Address</h4>
          <p>
            International Islamic University <br>
           H10, Islamabad<br>
          </p>
        </div>
  
      </div>
  
      <div class="col-lg-3 col-md-6 footer-links d-flex">
        <i class="bi bi-telephone icon"></i>
        <div>
          <h4>About Orchid</h4>
          <p>
            <strong>Who We Are?</strong> info@example.com<br>
            <strong>Privacy Policy</strong> +1 5589 55488 55<br>
            <strong>FAQS:</strong> info@example.com<br>
          </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 footer-links d-flex">
        <i class="bi bi-clock icon"></i>
        <div>
          <h4>Opening Hours</h4>
          <p>
            <strong>Mon-Sat: 11AM</strong> - 23PM<br>
            Sunday: Closed
          </p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Follow Us</h4>
        <div class="social-links d-flex">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Orchid</span></strong>. All Rights Reserved
    </div>
    <div class="credits">

    </div>
  </div>

</footer><!-- End Footer -->
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
    </body>
</html>