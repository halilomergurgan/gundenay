<?php
	
include 'baglanti.php';
include 'panel_header.php';
   
            $isbasvurususorgu=mysql_query("select * from is_basvurulari") ;
            $is_basvurulari = array();
            while ($isbasvurusucek=mysql_fetch_assoc($isbasvurususorgu)) {
            	$is_basvurulari [] = $isbasvurusucek;
            } 
			
 		?>

<link rel="stylesheet" type="text/css" href="fotograf.css">
<meta charset="utf-8">
<form action ="" method="POST" >
        <table border="1">
        <?php

 foreach($is_basvurulari as $key=>$listeler)
 {
         //$key = 4;
          $html = ""; 
                if($key%4 == 0)
                $html .='</br>' ;
                $html .= '<div style="width: 120px;min-height:25px; text-align:center">';
                echo "ADI : ". $listeler['adi']."</br>";
                echo "SOYADI : ".$listeler['soyadi']."</br>";
                echo "MESLEĞİ : ".$listeler['meslek']."</br>";
                echo "TELEFONU : ".$listeler['telefon']."</br>";
                echo "AÇIKLAMASI : ".$listeler['aciklama']."</br>";
                $html .= '<hr>'; 
                $html .= '</div>';       
                $html .= '</td>';
   

         
            echo $html;
  } 

        ?>
        </table>
        </form>
        <?php    
    	         
		?>


