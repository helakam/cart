<?php

session_start();

require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb("newdb", "product");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              //echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/header.css" />
<link rel="stylesheet" href="css/footer.css" />
         <!-- <link rel="stylesheet" href="css/cart.css" />-->
   
<link rel="stylesheet" href="css/stylecart.css">
  <!--<link rel="stylesheet" href="css/style.css">-->
    <link rel="stylesheet" href="css/indexs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="bg-light">

<?php
 require_once ('php/header1.php');
    //require_once ('php/header.php');

?>
<!--   <div class="shopping-cart">
                <h6>My Cart</h6>-->
                
                <div class="wrap cf">
 
  <div class="heading cf">
    <h1>My Cart</h1>
    <a href="#" class="continue">Continue Shopping</a>
  </div>
</div>
