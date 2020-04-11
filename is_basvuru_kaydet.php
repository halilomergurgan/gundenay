<?php

	include 'baglanti.php';
	

	mysql_query($sql = "INSERT INTO is_basvurulari
                (
                adi,
                soyadi,
                meslek,
                telefon,
                aciklama
                )
                VALUES 
                 (
                '".$_POST['adiniz']."',
                '".$_POST['soyadiniz']."',
                '".$_POST['meslek']."',
                '".$_POST['telefon']."',
                '".$_POST['aciklama']."' 

            );"

                 );

	header('location:/is_basvuru.php')




?>