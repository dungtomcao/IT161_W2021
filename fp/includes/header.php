<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?></title>
  <meta name="robots" content="noindex,nofollow" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/styles.css" />
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
   <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
</head>

<body>
    <header>


<a class="logo" href="index.php"><img class="logo_img" src="images/osgclogo.png"></img></a>
</a>

<a class="cart" href="cart.php"><i class="fa fa-shopping-basket fa-2"></i>



 <!-- The overlay -->
 <div id="myNav" class="overlay">

<!-- Button to close the overlay navigation -->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<!-- Overlay content -->
<div class="overlay-content">
      <a href="index.php">Home</a>
      <a href="products.php">Products</a>
      <a href="careers.php">Careers</a>
      <a href="contact.php">Contact</a>
</div>

</div>

<!-- Use any element to open/show the overlay navigation menu -->
<span class="menu" onclick="openNav()"><i class="fa fa-bars"></i></span> 


</header>