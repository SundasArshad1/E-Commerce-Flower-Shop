<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="images/favicon.png" rel="icon">
  <link href="images/apple-touch-icon.png" rel="apple-touch-icon">

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
  <link href="assets/css/cart.css" rel="stylesheet">

  <style>
    .table
{
    padding:10px;
    width:65%;
    margin: 20px;
}

.sub
{
    border:1px solid gray;;
    width:25%;
    float:right;
    padding:10px;
    height: 320px;
    margin-right: 50px;
    margin-top:-300px;
}
.buttn
    {
      background-color:#A3DF46;
      color:white;
      padding:10px;
      width:90%;
      margin-left:20px;
      margin-bottom:20px;
    }
  .tab
  {
    width:100%;
  }
    </style>
</head>

<body>
 
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
  </header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

<div><h4 style="margin-top:100px;margin-left:40px;">Your Cart</h4></div>
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
         if (!isset($_SESSION["count"]))
         $_SESSION["count"]=0;



if (isset($_GET["PID"])) 
{
  $PID = $_GET["PID"];
  $i = $_SESSION["count"];
  $flag = false;
  $Name = $_GET["Name"];
  $img = $_GET["img"];
  $Price = (int)$_GET["Price"];

  

  for ($i = 0; $i <$_SESSION["count"] ; $i++) 
  {
      if ($_SESSION["PID"][$i] == $PID) {
          $_SESSION["quantity"][$i]++;
          $_SESSION["price"][$i] = $_SESSION["quantity"][$i]*$Price;
          $flag = true;
      }
  }

  if ($flag == false) 
  {
      $_SESSION["Image"][$i] = $img;
      $_SESSION["name"][$i] = $Name;
      $_SESSION["PID"][$i] = $PID;
      $_SESSION["price"][$i] = $Price;
      $_SESSION["quantity"][$i] = 1;
      $_SESSION["count"]++;
  }
} 

if($_GET["card"]!=="0")
{
  $card=(int)$_GET['card'];
  $sql = "SELECT Card_Price FROM `card` WHERE Card_ID = $card";
  
  try {
    $rows = $conn->query( $sql );
   
    } catch ( PDOException $e ) {
    echo "Query failed: " . $e->getMessage();
  }
  foreach($rows as $row)
  {
    $card=$row["Card_Price"];
  }
}
echo "<table border='1' class='table'><tr><td>Item</td><td> Product ID</td><td>Product name</td><td> Price</td><td>Quantity</td><td>Remove</td></tr>";
$sum=$card;

for($i=0;$i<sizeof($_SESSION['PID']);$i++)
{
echo "<td><img src='".$_SESSION['Image'][$i]."' width='90%' height='150px'></td>";
echo "<td>".$_SESSION['PID'][$i]."</td>";
echo  "<td>".$_SESSION["name"][$i]."</td>";
echo "<td>".$_SESSION["price"][$i]."</td>";
echo "<td>".$_SESSION["quantity"][$i]."</td>"; 

echo "<td><a href=remove.php?PID=".$i.">Remove</a></td></tr>";
$sum=$sum+$_SESSION["price"][$i];
}

echo "</table>";
echo " <p style='margin-top:20px; font-size:30px;font-weight:bold; margin-left:10px;'>Total amount: Rs.".$sum."</p>";
$_SESSION["Sum"]=$sum;


?>

<div class="sub">
<table class='tab'><tr><td><p>Summary</p><hr style="width:100%;">
<tr><td>SubTotal: <?php echo $sum?><hr style="width:100%;"></td></tr>
<tr><td>Delivery charges: <?php $d =250; echo $d;?><hr></td></tr>
<tr><td>Order Total: <?php echo $d+$sum;?><hr>
<button class="buttn"><a href="Checkout.php">Check Out</a></button></td></tr>

</table>
</div>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style="margin-top:50px;">

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
        &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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