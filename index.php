
 <?php include 'header.php';    /*single_iteam --- slider_tittle*/
       include 'baglanti.php'

       ?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <section id="mainContent">
    <div class="content_top">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="latest_slider">
            <div class="slick_slider">
              
              <?php
                $sizden_gelenler_sorgu = mysql_query("SELECT * FROM sizden_gelenler where onaylandi_mi = '1' and deleted='0'");

                while ($sdcek=mysql_fetch_assoc($sizden_gelenler_sorgu)) {
 
                  ?>
              <div class="single_featured_slide"> <a href=""><img src="<?php echo $sdcek['sizden_gelenler_resim']; ?>" height="400" width="100%" ><?php echo $sdcek['sizden_gelenler_ad']; ?></a>
             
              </div>
              <?php
            }
              ?>

            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="content_top_right">

            <ul class="featured_nav wow fadeInDown">
              <li><img src="uploads/mandalina.jpg" alt="">
                <div class="title_caption"><a href="http://seferihisar.bel.tr/seferihisar-mandalina-senligine-hazirlaniyor/" target="_blank" >Mandalina şenliği</a></div>
              </li>
              <li><img src="uploads/kaleici.jpg" alt="">
                <div class="title_caption"><a href="https://www.bizevdeyokuz.com/sigacik-seferihisar-gezilecek-yerler/" target="_blank">Seferihisar Kaleiçi</a></div>
              </li>
              <li><img src="uploads/seferihisar.jpg" alt="">
                <div class="title_caption"><a href="http://www.sakinsehirseferihisar.com/seferihisari-taniyalim.html" target="_blank">Seferihisar’ı Tanıyalım</a></div>
              </li>
              <li><img src="uploads/bahce4.jpg" alt="">
                <div class="title_caption"><a href="hakkimizda.php">Gündenay Kafe</a></div>
              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>
    <div class="content_middle">
      <div class="col-lg-9 col-md-3 col-sm-0">
        <div class="content_middle_middle">
          <div class="slick_slider2">
            
            <?php
             
            
                $duyuru_sorgu = mysql_query("SELECT * FROM duyurular2");

                while ($duyurucek=mysql_fetch_assoc($duyuru_sorgu)) {

                  ?>
              <div class="single_featured_slide"> <a href=""><img src="<?php echo $duyurucek['duyuru_resmi']; ?>" height="400" width="100%" ><?php echo $duyurucek['duyuru_icerigi']; ?></a>
             
              </div>
              <?php
                }

            ?>
           
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-">
        <div class="content_middle_rightbar">
          <div class="single_category wow fadeInDown">
            
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="title_text">İş Başvuruları</a> </h2>
            <ul class="catg1_nav">
              <li>
                <div class="catgimg_container"> <a href="is_basvuru.php" class="catg1_img"><img alt="" src="uploads/unnamed.jpg"></a></div>
                <h3 class="post_titile"><a href="is_basvuru.php">İş Başvurusu Yapmak İçin Tıklayınız</a></h3>
              </li>
              <li>
                <div class="catgimg_container"> <a href="is_basvurusu_kurumsal.php" class="catg1_img"><img alt="" src="uploads/unnamed.jpg"></a></div>
                <h3 class="post_titile"><a href="is_basvurusu_kurumsal">Kurumsal İş Başvuruları</a></h3>
              </li>
             
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="content_bottom">
      <div class="col-lg-8 col-md-8">
        <div class="content_bottom_left">
          <div class="single_category wow fadeInDown">
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Sosyal Medya </a> </h2>
            <div class="business_category_left wow fadeInDown">
              <ul class="fashion_catgnav">
                <li>
                  <div class="catgimg2_container"> <a href="gazetehaberi.php"><img alt="" src="uploads/haberler.jpg"></a> </div>
                  <h2 class="catg_titile"><a href="gazetehaberi.php">Gündenay Kafe Gazetelerde</a></h2>
                  <div class="comments_box"> <span class="meta_date">14/12/2016</span></div>
                </li>
              </ul>
            </div>
            <div class="business_category_right wow fadeInDown">
              <ul class="small_catg">
                <li>
                  <div <a class="" href="#"><i class="fa fa-facebook"></i></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="https://tr-tr.facebook.com/gundenay/"><strong>Facebook</strong></a></h4>
                    
                    </div>
                  </div>
                </li>
                <li>
                  <div  <a class="Swarm" href="#"><i class="fa fa-Swarm"></i></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="https://tr.swarmapp.com/">Swarm</a></h4>
                       
                    </div>
                  </div>
                </li>
                <li>
                  <div <a class="foursquare" href="#"><i class="fa fa-foursquare"></i></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="https://tr.foursquare.com/v/g%C3%BCndenay-kafe/4f9523f6e4b032461a9cb7e9/photos">Foursquare</a></h4>
                     
                    </div>
                    <div <a class="" href="#"><i class="fa fa-instagram"></i></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="https://www.instagram.com/explore/locations/889090711250971/akarca-gundenay-cafe/">İnstagram</a></h4>
                    
                    </div>  
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="content_bottom_right">
          <div class="single_bottom_rightbar">
            <h2> <a href="muzik.php"> Canlı Müziklerimiz </h2>
            <ul class="small_catg popular_catg wow fadeInDown">
              <li>
                <div class="media wow fadeInDown"> <a href="muzik.php" class="media-left"><img alt="" src="uploads/müzikgrubu.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="muzik.php">Her Cuma Ve Cumartesi akşamı 20.00-24.00 arası </a></h4>
                    <p>Gitar , Perkinson , Saz ve Solistimiz ile 20.00-24.00 arası Cuma - Cumartesi akşamları sizleri Gündenay Kafe'de canlı müzik keyfine bekliyoruz...</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="hakkimizda.php" class="media-left"><img alt=""  src="uploads/müzikgrubuaheng.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Her Çarşamba akşamı 20.00-24.00 arası Grup AHENG </a></h4>
                    <p>Gitar , Perkison ve Bayan Solist ile grup aheng çarşamba günleri sizleri Gündenay Kafe'de bekliyoruz...</p>
                  </div>
                </div>
              </li>
            </ul>
          </div> 
        </div>
      </div> 
    </div>
  </section>
</div>
<?php include 'footer.php';?>


