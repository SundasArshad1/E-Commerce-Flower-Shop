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
  <style>
    .sub
    {
      border:1px solid gray;;
      width:35%;
      padding:10px;
      height: 450px;
      margin-left: 550px;
      margin-top:30px;
      margin-bottom:30px;
    }
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 10px; 
    text-align: center;
    text-decoration: none;
    width:100%;
    font-size: 20px;
    cursor: pointer;
    
  }

  input[type=submit] {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 10px; 
    text-align: center;
    text-decoration: none;
    width:20%;
    font-size: 20px;
    cursor: pointer;
    
  }
  .tab
  {
    width:100%;
  }

  .custom
  {
    width:90%;
    margin-left:100px;
    margin-top:20px;
    margin-bottom:20px;
  }

  select, input[type=text]{
  
    text-align: center;
    text-decoration: none;
    width:80%;
    font-size: 20px;
    margin:5px;
    cursor: pointer;
  }

  input[type=radio],label
  {
    margin-left:80px;
  }
  label
  {
    margin-left:60px;
  }
  </style>

</head>

<body>
 
<?php
          $dsn = "mysql:dbname=orchid_db";
          $username = "root";
          $password = "";
          $selectedImage = $_POST["image"];
          echo $selectedImage;
          try 
          {
              $conn = new PDO( $dsn, $username, $password );
              $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
          } 
          
          catch ( PDOException $e ) 
          {
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
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Show Your<br>Love</h2>
          <p data-aos="fade-up" data-aos-delay="100">By Customizing Your Own Bouquet</p>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="images/custom.jpeg" width="70%" height="350px" alt="" style="border-radius:50%;"data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <!DOCTYPE html>
<html>
<head>
    <title>Customize Bouquet</title>
</head>
<body>


  <div class="custom">
    <form method="post">  
      <table width="100%">   
      <tr>
        <td style="margin-top:20px" colspan="5" align="center"><h4>CHOOSE YOUR FLOWER</h4></td>
        </tr>
        <tr>
          <td><img src="images/rose1.jpg" style="border-radius:50%;" width="80%" height="200px"></td>
          <td>  <img src="images/lili1.jpg" style="border-radius:50%;" width="80%" height="200px"></td>
          <td>  <img src="images/orchid1.jpg" style="border-radius:50%;" width="80%" height="150px"></td>
          <td>  <img src="images/tulip1.jpg" style="border-radius:50%;" width="80%" height="200px"></td>
          <td>  <img src="images/ger1.jpg" style="border-radius:50%;" width="80%" height="200px"></td>
        </tr>
        <tr>
        <td>
          <select name="col1">Select color
            <option value="0">Select</option>
            <option value="F-01">Red</option>
            <option value="F-02">Pink</option>
            <option value="F-03">White</option>
            <option value="F-04">Yellow</option>
          </select>
        </td>
        <td>
        <select name="col2">Select color
            <option value="0">Select</option>
            <option value="F-05">Red</option>
            <option value="F-06">Pink</option>
            <option value="F-07">White</option>
            <option value="F-08">Yellow</option>
          </select>
        </td>
        <td>
          
          <select name="col3">Select color
          <option value="0">Select</option>

            <option value="F-09">Red</option>
            <option value="F-10">Pink</option>
            <option value="F-11">White</option>
            <option value="F-12">Yellow</option>
          </select>
        </td>
        <td>
          <select name="col4">Select color
          <option value="0">Select</option>

            <option value="F-13">Red</option>
            <option value="F-14">Pink</option>
            <option value="F-15">White</option>
            <option value="F-16">Yellow</option>
          </select>
        </td>
        <td>
          
          <select name="col5">Select color
          <option value="0">Select</option>
            <option value="F-17">Red</option>
            <option value="F-18">Pink</option>
            <option value="F-19">White</option>
            <option value="F-20">Yellow</option>
          </select>
        </td>
       
        </tr>
        <tr>
        <td>
          <input type="text" name="flower1" placeholder="Enter quantity">
        </td>
        <td>
          <input type="text" name="flower2" placeholder="Enter quantity">
        </td>
        <td>
          <input type="text" name="flower3" placeholder="Enter quantity">
        </td>
        <td>
          <input type="text" name="flower4" placeholder="Enter quantity">
        </td>
        <td>
          <input type="text" name="flower5" placeholder="Enter quantity">
        </td>
      </tr>
      <tr>
          <td><label>Roses</label></td>
          <td><label>Lilies</label></td>
          <td><label>Orchid</label></td>
          <td><label>Tulip</label></td>
          <td><label>Garberas</label></td>
        </tr>
      <tr ><td colspan="5" align="center"><h4 style="margin-top:20px">SELECT WRAP TYPE</h4></td></tr>
      <tr>
      <td>
      <span></span>
        </td>
        <td>
        <img src="images/box.jpg" width="80%" style="border-radius:50%;" height="150px"><br>
        </td>
        <td>
          <img src="images/vase.png" width="80%" height="150px" style="border-radius:50%;"><br>
        </td>
        <td>
          <img src="images/wrap.jpg" width="80%" height="150px" style="border-radius:50%;"><br>
        </td>
        <td>
      <span></span>
        </td>
      </tr>
      <tr>
      <td>
      <span></span>
        </td>
        
        <td>
          <input type="radio" id="box" name="w1" value="W-01">
          <br><label>Box</label>
        </td>
        <td>
          <input type="radio" id="vase" name="w1" value="W-02">
          <br><label>Vase</label>
        </td>
        <td>
          <input type="radio" id="sheet" name="w1" value="W-03">
          <br><label>Sheet</label>
        </td>
        <td>
          <span></span>
        </td>
      </tr>

      <tr><td colspan="5" align="center"><h4 style="margin-top:20px;">SELECT GIFT CARD</h4></td></tr>
      <tr>
        <td>
        <img src="images/birthday.png" width="90%" height="250px"><br>

          <input type="radio" id="card1" name="card" value="C-01">
          <br><label>Birthday</label>
        </td>
        <td>
          <img src="images/co.png" width="90%" height="250px"><br>
          <input type="radio" id="card2" name="card" value="C-02">
          <br><label>Congratulations</label>
        </td>
        <td>
          <img src="images/anniv.png" width="90%" height="250px"><br>
          <input type="radio" id="card3" name="card" value="C-03">
          <br><label>Anniversery</label>
        </td>
         <td>
          <img src="images/th.png" width="90%" height="250px"><br>
          <input type="radio" id="card4" name="card" value="C-04">
          <br><label>Thank You</label>
        </td>
          <td>
          <img src="images/so.png" width="90%" height="250px"><br>
          <input type="radio" id="card5" name="card" value="C-05">
          <br><label>Sorry</label>
        </td>

      </tr>
  <tr><td align="center" colspan="5"><input type="submit" name="submit" value="Calculate Total" style="margin-top:20px;"></td></tr>

  </table>
</form>
</div>

<?php
  if(isset($_POST["submit"]))
  {
    $flower = array();
          $quantity = array();$wrap="";$card="";
          $i = 0;
         
          if (isset($_POST["col1"]) && $_POST["col1"] !== '0') 
          {
              $flower[$i] = $_POST["col1"];
              $quantity[$i] = $_POST["flower1"];
              $i++;
          }
          
          if (isset($_POST["col2"]) && $_POST["col2"] !== '0') 
          { 
                $flower[$i] = $_POST["col2"];
                $quantity[$i] = $_POST["flower2"];
                $i++;
          }
          
          if (isset($_POST["col3"]) && $_POST["col3"] !== '0') 
          { 
                $flower[$i] = $_POST["col3"];
                $quantity[$i] = $_POST["flower3"];
                $i++;
          } 
            
          if (isset($_GET["col4"]) && $_GET["col4"] !== '0') 
          {
                $flower[$i] = $_POST["col4"];
                $quantity[$i] = $_POST["flower4"];
                $i++;
          }
            
          if (isset($_POST["col5"]) && $_POST["col5"] !== '0') 
          {
              $flower[$i] = $_POST["col5"];
              $quantity[$i] = $_POST["flower5"];
              $i++;
          }
        $price=array();
        $total=0;

        foreach ($flower as $index => $flowerId) 
        {
          $sql="SELECT Flower_Price from flower WHERE Flower_ID='$flowerId'";
          try 
          {
            $rows = $conn->query($sql);
            foreach ($rows as $row) 
            {
              $price[$flowerId] = $row["Flower_Price"] * $quantity[$index]; // Multiply price with quantity
              $total += $price[$flowerId];
            }
           
          } 
          catch ( PDOException $e ) 
          {
            echo "Query failed: " . $e->getMessage();
          }
        }

       
          if (isset($_POST["card"]) && $_POST["card"]==="C-01") 
            {
              $card="C-01";
            }
          
            else if (isset($_POST["card"]) && $_POST["card"]==="C-02") 
            {
                $card="C-02";
            }
    
            else if (isset($_POST["card"]) && $_POST["card"]==="C-03") 
            {
              $card="C-03";
            }
            else if (isset($_POST["card"]) && $_POST["card"]==="C-04") 
            {
              $card="C-04";
            }
          
            else if (isset($_POST["card"]) && $_POST["card"]==="C-05") 
            {
                $card="C-05";
            }

            $sql = "SELECT Card_Price FROM card WHERE Card_ID='$card'";

          try 
            {
              $rows = $conn->query($sql);
              //echo "Successful";
              foreach ($rows as $row) 
              {
                $c=$row["Card_Price"];
              }
            } 
            catch ( PDOException $e ) 
            {
              echo "Query failed: " . $e->getMessage();
            }

            //Wrap
            if (isset($_POST["w1"]) && $_POST["w1"] === "W-01") 
            {
              $wrap = "W-01";
            } 
    
            else if (isset($_POST["w1"]) && $_POST["w1"] === "W-02") 
            {
              $wrap = "W-02";
            } 
    
            else if (isset($_POST["w1"]) && $_POST["w1"] === "W-03") 
            {
              $wrap = "W-03";
            }

            
            $sql="SELECT Wrap_Price from wrap WHERE Wrap_ID='$wrap'";
            try 
              {
                $rows = $conn->query($sql);
                //echo "Successful";
                foreach ($rows as $row) 
                {
                  $w=$row["Wrap_Price"];
                }
              } 
              catch ( PDOException $e ) 
              {
                echo "Query failed: " . $e->getMessage();
              }

          $data=array("PID"=>"CC-01","Name"=>"Customized","Price"=>$total,"img"=>"images/custom.jpg");
          $d=250;
      $totala=$total+$d;
      echo "<div class='sub'>
      <table class='tab'><tr><td><p>Summary</p><hr>
      <tr><td>SubTotal: $total<hr></td></tr>
      <tr><td>Delivery charges:$d<hr></td></tr>
      <tr><td>Order Total: $totala<hr></td></tr>
      <tr><td>Do you want to add this in cart?<hr><button class='button'><a href='Cart.php?".htmlspecialchars(http_build_query($data))."'>Add to Cart</a></button><hr></td></tr>
      <tr><td><button class='button'><a href='index.html'>Go Back</a></button></td></tr>
    </table>
    </div>";
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