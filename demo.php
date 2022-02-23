<?php
session_start();
if (isset($_SESSION['username'])){
$name = $_SESSION['userid'];
}

$conn = new mysqli('localhost', 'root', '', 'phvatsim') or die ('Cannot connect to db');

if(isset($_POST['confirm']))
{
$name = $_SESSION['userid'];
$address = $_POST ['adr'];
$product = $_POST ['product'];
$contact = $_POST ['con'];
$email = $_POST ['ema'];
$prod_qty = $_POST['prod_qty'];
$cash=$_POST['cs'];
$username = $_SESSION['username'];
    
$result = mysqli_query($conn,"SELECT `stocks` FROM `products` WHERE productname = '$product'");
$message = "<script>alert('Order Placed to our Database! We will contact you on the e-mail you provided for your order sumamry, Thank You!');</script>";

while($row = mysqli_fetch_array($result))
{
$_SESSION['stocks'] = $row['stocks'];
}

$newstocks = $_SESSION['stocks'] - $prod_qty;

$update = mysqli_query($conn, "UPDATE products SET `stocks` = '$newstocks' WHERE productname = '$product'");


$sql = ("INSERT INTO `transactions`(`username`, `user_id`, `customer_address`, `customer_contact`,`customer_email`, `prod_name`, `prod_qty`) VALUES ('$username','$name','$address','$contact', '$email','$product', '$prod_qty')");
$result = $conn->query($sql);
    
if($result === TRUE){
      echo $message;
  }

}
?>


<meta http-equiv="refresh" content="3;URL=../index.php"/>
Redirecting to home page in 3 seconds. Or redirect <a href="../index.php">now.</a>