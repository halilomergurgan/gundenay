<?php
	
include 'baglanti.php';
include 'panel_header.php';
   
            $menusorgu=mysql_query("select * from sizden_gelenler where onaylandi_mi = '0' and deleted = '0'") ;
            $menu = array();
            while ($menucek=mysql_fetch_assoc($menusorgu)) {
            	$menu [] = $menucek;
            } 
			
 		?>

<link rel="stylesheet" type="text/css" href="fotograf.css">
<meta charset="utf-8">
<form action ="/sizden_gelenler_onayla_kaydet.php" method="POST" >
        <table border="1">
        <?php

 foreach($menu as $key=>$listeler)
            {
                 
        
         //$key = 4;
          $html = ""; 
                if($key%4 == 0)
                	//$html .= '<tr style="margin-bottom:10px"><td>';
                //$html .= '<td style="padding: 4px">';
                $html .='</br>' ;
                $html .= '<div style="width: 120px;min-height:164px; text-align:center">';

                $html .= '<img class="f-profile-image" style="width: 100%;" src="'. $listeler['sizden_gelenler_resim'].'" title="">';
                $html .= '<div>"'.$listeler['sizden_gelenler_ad'].'" </div>';

                $html .= '</div>';
                $html .= '<div >'; 
               // $html .='<h2 class="f-profile-tc" >'.$kimlik['tc_kimlik_numarasi'].'</h2>' ;
              // $html .='<h2 class="f-date">Eklenme: '.date("d-m-Y",strtotime($fotograflar[$medyaId]['eklenme_tarihi'])).'</h2>' ;
                $page = "sizden_gelenler_onayla_kaydet.php";
                if($listeler['onaylandi_mi'] == 0)
               
                    $html .='<a class="f-btn f-btn-primary"  href="'.$page."?id=".$listeler['id']."".'">Onayla</a>' ;

                    $html .='<a class="f-btn f-btn-primary" href= "'.$page."?sil=".$listeler['id']."".'">Sil</a>' ;
         
                //$html .='<a class="f-btn f-btn-delete" href="'.$fotografSil.$kimlik['id'].'&page='.$page.'">Fotoğrafı Sil</a>' ;
                $html .= '<hr>';                
                $html .= '</div>';
                $html .= '</td>';
               if($key%4 == 3)
                     $html .= '</tr>';

         
            echo $html;
  } 

        ?>
        </table>
        </form>
        <?php    
    	         
		?>


