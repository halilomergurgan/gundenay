<?php 
include 'baglanti.php';
 ?>

<!DOCTYPE html>
<html>
<head>
<title>Gündenay Cafe</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
 
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="header_bottom">
          <div class="header_bottom_left" ><a class="logo"  href="index.php">Gündenay<strong>Kafe</strong> <span> </span></a></div>
          <div class="header_bottom_left"><a href="#"><img src="" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
 <div id="navarea">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav custom_nav">

            <?php 
            $menusorgu=mysql_query("select * from menuler") ;

            while ($menucek=mysql_fetch_assoc($menusorgu)) {
            
            ?>
           

            <li><a href="<?php echo $menucek['tablo_menuurl']; ?>"><?php echo $menucek['tablo_menuad'];
             ?></a></li>
            
             <?php  }
             ?>
          
          </ul>
        </div>
      </div>
    </nav>
  </div>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/custom.js"></script>





                           <!-- HTML TEMPLATE PARÇALAMA VE PHP UYUMLU HALE GETİRME -->

