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
  <title>Checkout Page</title>
    <style>
input[type=text],input[type=tel],input[type=email]
{
  
  text-align: center;
  text-decoration: none;
  width:80%;
  font-size: 20px;
  margin:5px;
  cursor: pointer;
}

input[type=submit]{
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 10px; 
    text-align: center;
    text-decoration: none;
    width:80%;
    margin-left:2px;
    font-size: 20px;
    cursor: pointer;
    
  }
    </style>
    <script type="text/javascript">
            function validateForm() {
            // Get the values of the form fields
            var email = document.forms["checkoutForm"]["email"].value;
            var title = document.forms["checkoutForm"]["title"].value;
            var firstName = document.forms["checkoutForm"]["firstName"].value;
            var lastName = document.forms["checkoutForm"]["lastName"].value;
            var mobileNumber = document.forms["checkoutForm"]["mobileNumber"].value;
            var streetAddress = document.forms["checkoutForm"]["streetAddress"].value;
            var country = document.forms["checkoutForm"]["country"].value;
            var province = document.forms["checkoutForm"]["province"].value;
            var city = document.forms["checkoutForm"]["city"].value;

        }
    </script>

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



  <form name="checkoutForm" action="" onsubmit="return validateForm()" method="post" style="width:50%; margin-top:100px; margin-bottom:100px; margin-left:400px;">
        <h2>Your Details:</h2>
        <label>Email Address:</label><br>
        <input type="email" name="email" required><br>

        <label>Full Name:</label><br>
        <input type="text" name="fullName" required><br>

        <label>Mobile Number:</label><br>
        <input type="tel" name="mobileNumber" required><br>

        <h2>Shipping Details:</h2>

        <label>Street Address/Home Number:</label><br>
        <input type="text" name="streetAddress" required><br>

        <label>Postal Code:</label><br>
        <input type="text" name="post" required><br>

        <input type="submit" value="Submit" name="submit" onclick="PlaceOrder()">
    </form>

    <?php
    // Check if the form has been submitted

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the values of the form fields
        $email = test_input($_POST["email"]);
        $fullName = test_input($_POST["fullName"]);
        $mobileNumber = test_input($_POST["mobileNumber"]);
        $streetAddress = test_input($_POST["streetAddress"]);
        $postal = test_input($_POST["post"]);
        
        // Validate the email address
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            exit();
        }
        // Validate the name fields
        if (!preg_match("/^[A-Z a-z]{5,30}$/", $fullName)) {
            echo "Please enter valid full name.";
            exit();
        }
        
      
        // Validate the country
        if (!preg_match("/^[0-9]{5}$/", $postal)) {
            echo "Please enter your valid postal code";
            exit();
        }

        // Validate the mobile number
        if (!preg_match("/^[0-9]{11}$/", $mobileNumber)) {
            echo "Invalid mobile number";
            exit();
        }
  }
  if (isset($_POST["submit"])) {
    echo "Called";
    $email = test_input($_POST["email"]);
    $fullName = test_input($_POST["fullName"]);
    $mobileNumber = test_input($_POST["mobileNumber"]);
    $streetAddress = test_input($_POST["streetAddress"]);
    $postal = test_input($_POST["post"]);

    $dsn = "mysql:dbname=orchid_db";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $order_id = 0;
    $cust_id = 0;
    $sql = "SELECT `Order_ID` FROM `bouquet_order`";
    try {
        $rows = $conn->query($sql);
    } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
    }

    foreach ($rows as $row) 
    {
        $order_id = $row["Order_ID"];
    }
    $order_id += 1;

    $sql = "SELECT `Customer_ID` FROM `customer`";
    try {
        $rows = $conn->query($sql);
    } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
    }

    foreach ($rows as $row) {
        $cust_id = $row["Customer_ID"];
    }

    $sql = "SELECT `Order_ID` FROM `bouquet_order`";
    try {
        $rows = $conn->query($sql);
    } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
    }

    foreach ($rows as $row) {
        $order_id = $row["Order_ID"];
    }

    $cust_id += 1;
    $order_id += 1;
    $sql = "INSERT INTO customer (Customer_Name,Customer_ID,Order_ID,Phone_No,Email_ID,Address,Postal_Code) VALUES('$fullName',$cust_id,$order_id,$mobileNumber,'$email','$streetAddress','$postal')";
    try {
        $rows = $conn->query($sql);
    } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
    }

    $date = date("d/m/y");

    $amount = $_SESSION["Sum"];

    $sql = "INSERT INTO bouquet_order (Order_ID, Order_Date, Order_Amount, Customer_ID) VALUES ($order_id, '$date', $amount, $cust_id)";
    try {
        $rows = $conn->query($sql);
    } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
    }

    

    
    $cartItems = $_SESSION["PID"];


    for($i=0;$i<sizeof($_SESSION['PID']);$i++)
    {
      $quantity = $_SESSION["quantity"][$i]; 
      $productId = $_SESSION["PID"][$i]; 
      $sql = "UPDATE bouquet SET Bouquet_Quantity = Bouquet_Quantity - $quantity WHERE Product_No = '$productId'";
      try {
          $conn->exec($sql);
      } catch (PDOException $e) {
          echo "Query failed: " . $e->getMessage();
      }
    }
  $conn = null;

}   

// Function to sanitize input data
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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