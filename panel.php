<?php
include 'baglanti.php';
session_start();
$adres = "panel_header.php";
if ($_POST) {
	 

$user_sorgu = mysql_query("SELECT * FROM `users` where username = '".$_POST['uname']."'") or die('sorgu yok') ;


          $user_cek=mysql_fetch_assoc($user_sorgu);
        	$say = mysql_num_rows($user_sorgu);
        	if($say > 0){
	        	$_SESSION['oturum'] = true;	
				$_SESSION['kullanici_adi'] = $user_cek['username']; 
	          	$_SESSION['kullanici_sifresi'] = $user_cek['password']; 

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
        	}  
			}else{
				  
				$adres = "admin.php";

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
			}
 
 
?>

 