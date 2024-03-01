<html>
    <head>
        <title>Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 
 <link href="CSS/home.css" rel="stylesheet">
 <link href="CSS/areas.css" rel="stylesheet">

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
         $sql="SELECT Flower_Name, Flower_ID,Flower_Price,Flower_Img from flower";
         try {
           $rows = $conn->query( $sql );
           } catch ( PDOException $e ) {
           echo "Query failed: " . $e->getMessage();
         }
    
        try {
        $rows = $conn->query( $sql );
        } catch ( PDOException $e ) {
        echo "Query failed: " . $e->getMessage();
        }
?>
    <nav class="navbar navbar-expand-lg" style="background-color: #ADF3C9; padding: 10px;">
      <a class="navbar-brand" href="#">Orchid</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <div class="input-group">
          <input type="search" class=" search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          <button type="button" class="btn btn-outline-primary">search</button>
        </div>
      </div>
    </nav>
    
    <div style="width:100%;">
    <img src="images/logo.png" width="30%" height="200px" style="margin-left:480px">
    <img src="images/flower.jfif" width="100%" height="400px" class="main">
 </div>

 <table border="2px" cellspacing="10px" width="95%"  style="background-color:#72D6A4;padding:10px;color:white; margin-top:10px;margin-left:30px;">
    <tr>
        <td style="background-color:#72D6A4;padding:10px;color:white;" align="center">Wedding</td>
        <td style="background-color:#72D6A4;padding:10px;color:white;" align="center">Anniversery</td>
        <td style="background-color:#72D6A4;padding:10px;color:white;" align="center">Birthday</td>
        <td style="background-color:#72D6A4;padding:10px;color:white;" align="center">Others</td>
    </tr>
</table>
<div width="100%">
  <?php 
    $num=0;
          foreach ( $rows as $row ) {
         if($num%4===0)
         {
         
          echo "<div class='row'><div class='col-md-3'><img src='".$row["Flower_Img"]."' width='100%' height='100px'  class='img'>
          <p class='img_des'>".$row['Flower_Name']."</p>
          <hr width='90%' style='margin-left:20px'><p class='img_des'>Rs. ".$row['Flower_Price']."</p><hr width='90%' style='margin-left:20px'>
          </div>";
          $num++;
         }
         else
         {
          echo "<div class='col-md-3'><img src='".$row["Flower_Img"]."' width='100%' height='100px' class='img'> 
          <p class='img_des'>".$row['Flower_Name']."</p>
          <hr width='90%' style='margin-left:20px'><p class='img_des'>Rs. ".$row['Flower_Price']."</p><hr width='90%' style='margin-left:20px'>";
          $num++;
          echo "</div>";
         }
}
 
  ?>

  </div>
    <footer class="footer">
  <div class="container">
   <div class="row">
     <div class="footer-col">
       <h4>company</h4>
       <ul>
         <li><a href="#">about us</a></li>
         <li><a href="#">our services</a></li>
         <li><a href="#">privacy policy</a></li>
         <li><a href="#">affiliate program</a></li>
       </ul>
     </div>
     <div class="footer-col">
       <h4>get help</h4>
       <ul>
         <li><a href="#">FAQ</a></li>
         <li><a href="#">shipping</a></li>
         <li><a href="#">returns</a></li>
         <li><a href="#">order status</a></li>
         <li><a href="#">payment options</a></li>
       </ul>
     </div>
     <div class="footer-col">
       <h4>online shop</h4>
       <ul>
         <li><a href="#">watch</a></li>
         <li><a href="#">bag</a></li>
         <li><a href="#">shoes</a></li>
         <li><a href="#">dress</a></li>
       </ul>
     </div>
     <div class="footer-col">
       <h4>follow us</h4>
       <div class="social-links">
         <a href="#"><i class="fab fa-facebook-f"></i></a>
         <a href="#"><i class="fab fa-twitter"></i></a>
         <a href="#"><i class="fab fa-instagram"></i></a>
         <a href="#"><i class="fab fa-linkedin-in"></i></a>
       </div>
     </div>
   </div>
  </div>
</footer>
    </body>
</html>