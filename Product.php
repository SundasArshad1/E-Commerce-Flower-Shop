<?php
  session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product</title>
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
  <link href="assets/css/product.css" rel="stylesheet">
  <style>
    select
    {
      text-align: center;
      text-decoration: none;
      width:20%;
      font-size: 15px;
      padding:10px;
      margin:5px;
      margin-left:25px;
    }

    .buttn
    {
      background-color:#A3DF46;
      color:white;
      padding:10px;
      width:20%;
      margin-left:500px;
      margin-bottom:20px;
    }
  </style>
</head>
    <body>

    <?php
       $dsn = "mysql:dbname=orchid_db";
       $username = "root";
       $password = "";
       try {
           $conn = new PDO( $dsn, $username, $password );
           $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
         } catch ( PDOException $e ) {
           echo "Connection failed: " . $e->getMessage();
         }
     
?>
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
        <li><a href="#about">About</a></li>
        <li class="dropdown"><a href="AreasWeServe.php"><span>Areas We Serve</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="Wedding.php">Wedding</a></li>
            <li><a href="Anniversery.php">Anniversery</a></li>
            <li><a href="Birthday.php">Birthday</a></li>
          </ul>
        </li>
        <li><a href="FAQS.html">FAQS</a></li>
        <li><a href="privacy.html">Privacy Policy</a></li>
        <li><a href="Contact Me.html">Contact</a></li>
      </ul>
    </nav><!-- .navbar -->
    <form method="get" action="search.php">
    <input type="search" class="btn-book-a-table" placeholder="Search">
   </form>

  </div>
</header><!-- End Header -->
 


    <?php
       $dsn = "mysql:dbname=orchid_db";
       $username = "root";
       $password = "";
       try {
           $conn = new PDO( $dsn, $username, $password );
           $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
         } catch ( PDOException $e ) {
           echo "Connection failed: " . $e->getMessage();
         }
     
    ?>
  
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


<?php   $PID = $_GET["PID"];
        $img = $_GET['Img'];
        $Name = $_GET['Name'];
        $Price = $_GET['Price'];
        $des=$_GET['Des'];?>


<table border="0" width="100%">
<form action="cart.php" method="get">
    <tr>
        <td>
            <div class="product_img">
                <img src="<?php echo $img; ?>" width="100%" height="300px">
            </div>

            <div class="general div" id="Myself">
                <h1><?php echo $Name; ?></h1>
                <h4>Description</h4>
                <p>Price: Rs. <?php echo $Price; ?><br/><?php echo $des; ?></p>
        </div>
        </td>
      </tr>
        <tr>
          <td class="greet" >
                    <label style="margin-left:500px; font-size:20px;font-weight:bold;margin-top:-150px;">Greetings Card</label>
        </td>
        <tr>
          <td>
                    <select name="card" style="margin-left:500px;margin-top:-100px;">
                    <option value="C-01">Birthday</option>
                    <option value="C-02">Wedding</option>
                    <option value="C-03">Anniversary</option>
                    <option value="C-04">Sorry</option>
                    <option value="C-05">Thank You</option>
                  </select>
        </td>
        </tr>
        <tr>
          <td >
                    <label style="margin-left:500px; font-size:20px;font-weight:bold;margin-top:-50px;">Enter Message</label>
        </td>
        </tr>
        <tr><td>
                    <textarea rows="5" cols="40" style="margin-left:500px; font-size:20px;font-weight:bold;margin-bottom:30px"></textarea>
        </td></tr>
        <?php 
             $dsn = "mysql:dbname=orchid_db";
             $username = "root";
             $password = "";
             try {
                 $conn = new PDO( $dsn, $username, $password );
                 $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
               } catch ( PDOException $e ) {
                 echo "Connection failed: " . $e->getMessage();
               }
               $productId = $_GET['PID'];
               $sql = "SELECT Bouquet_Quantity FROM bouquet WHERE Product_No = '$productId'";
               
            try {
              $rows = $conn->query( $sql );
             
              } catch ( PDOException $e ) {
              echo "Query failed: " . $e->getMessage();
            }
            foreach($rows as $row)
            {
              $quantity = $row["Bouquet_Quantity"];
            }
            
    
            if ($quantity > 0) 
            {
                // $data = array("PID" => $PID, "Name" => $Name, "Price" => $Price, "img" => $img);
                // echo '<button class="button" name="add"><i class="fa fa-shopping-cart"></i><a href="Cart.php?' . htmlspecialchars(http_build_query($data)) . '">Add to Cart</a></button>';
              
                echo "<input type='hidden' name='PID' value='$PID'>";
                echo "<input type='hidden' name='Name' value='$Name'>";
                echo "<input type='hidden' name='Price' value='$Price'>";
 
                  echo "<input type='hidden' name='img' value='$img'>";
                 // echo '<button class="button"><a href="AreasWeServe.php">Continue Shopping</a></button>';
                 echo "<tr><td><input type='submit' value='Add to Cart' class='buttn'></td></tr>";

              } else 
            {
              echo "<tr><td><div style='color:red;margin-top:10px;margin-bottom:10px;margin-left:500px;font-weight:bold;font-size:20px;'> Out of Stock</div><tr><td>";

              echo '<tr><td><button class="buttn"><a href="AreasWeServe.php">Continue Shopping</a></button><tr><td>';
            }
          
          ?>
       
        </td> 
    </tr>
  </form>
</table>






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