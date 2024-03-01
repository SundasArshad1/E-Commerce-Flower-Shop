<html>
<head>
<style>
*{ font-size:16pt;
color:#331155;}
</style></head>
<body>

<?php
    session_start();
    $a=(int)$_GET["PID"];
    //echo "value is <br>".$a;
    array_splice($_SESSION["name"],$a,1);
    array_splice($_SESSION["PID"],$a,1);
    array_splice($_SESSION["price"],$a,1);
    array_splice($_SESSION["quantity"],$a,1);
    $_SESSION["count"]--;

    header("Location:Cart.php");
?>
</body>
</html>