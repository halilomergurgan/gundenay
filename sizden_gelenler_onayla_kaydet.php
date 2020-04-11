<?php

include 'baglanti.php';
 

		if ($_REQUEST['sil']) {
			mysql_query($sql = "UPDATE sizden_gelenler SET deleted='1' WHERE id=".$_REQUEST['sil'].""); 
		}else{

			mysql_query($sql = "UPDATE sizden_gelenler SET onaylandi_mi='1' WHERE id=".$_REQUEST['id']."");
		}


			header('location:sizden_gelenler_onayla.php')


?>