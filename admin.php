<?php 
//error_reporting(E_ALL);
include 'baglanti.php';
session_start();
//var_dump($_SESSION['oturum']);die;

if($_SESSION['oturum'] == true){
    $adres  = "panel_header.php";
    echo '<html><head></head><body><center>
                    BAŞARIYLA GİRİŞ YAPTINIZ.<br>
                    YÖNLENDİRİLİYORSUNUZ.<br>
                    (Eğer sayfa değişmezse <a href="' . $adres . '">buraya tıklayarak</a> giriş yapabilirsiniz)
                    </center>
                    <script>
                    window.top.location = "' . $adres . '";
                    </script>
                    </body></html>
                    ';
                exit;
}else{
    
    ?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

  <form class="modal-content animate" style="width: 20%;" method="POST" action="panel.php">
    <div class="imgcontainer">
      
  
    </div>

    <div class="container">
      <label for="uname"><b>Kullanıcı Adı</b></label>
      <input type="text" placeholder="Kullanıcı Adını Giriniz" name="uname" required>

      <label for="psw"><b>Şifre</b></label>
      <input type="password" placeholder="Şifreyi Giriniz" name="psw" required>
        
      <button type="submit">Giriş</button>
     
    </div>
    
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">İptal</button>
     
    </div>
  </form>



</body>
</html>

    <?php
    
}



