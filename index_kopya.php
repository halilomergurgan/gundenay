
 <?php include 'header.php';    /*single_iteam --- slider_tittle*/
       include 'baglanti.php'

       ?>
 
  <section id="mainContent">
    <div class="content_top">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm6">
          <div class="latest_slider">
            <div class="slick_slider">
              
              <?php
                $sizden_gelenler_sorgu = mysql_query("SELECT * FROM sizden_gelenler");

                while ($sdcek=mysql_fetch_assoc($sizden_gelenler_sorgu)) {
 
                  ?>
              <div class="single_featured_slide"> <a href=""><img src="<?php echo $sdcek['sizden_gelenler_resmi']; ?>" height="400" width="100%" ><?php echo $sdcek['sizden_gelenler__ad']; ?></a>
              </p>
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
              <li><img src="images/300x215x1.jpg" alt="">
                <div class="title_caption"><a href="gazetehaberi.php">Mandalina şenliği</a></div>
              </li>
              <li><img src="images/300x215x2.jpg" alt="">
                <div class="title_caption"><a href="gazetehaberi.php">Sed luctus semper odio aliquam rhoncus</a></div>
              </li>
              <li><img src="images/300x215x3.jpg" alt="">
                <div class="title_caption"><a href="gazetehaberi.php">Sed luctus semper odio aliquam rhoncus</a></div>
              </li>
              <li><img src="images/300x215x4.jpg" alt="">
                <div class="title_caption"><a href="gazetehaberi.php">Sed luctus semper odio aliquam rhoncus</a></div>
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
             
            
                $duyuru_sorgu = mysql_query("SELECT * FROM duyurular");

                while ($duyurucek=mysql_fetch_assoc($duyuru_sorgu)) {

                  ?>
              <div class="single_featured_slide"> <a href=""><img src="<?php echo $duyurucek['duyuru_resmi']; ?>" height="400" width="100%" ><?php echo $duyurucek['duyuru_icerigi']; ?></a>
              <h2><a href="pages/single.html"></p>
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
                <div class="catgimg_container"> <a href="pages/single.html" class="catg1_img"><img alt="" src="images/292x150x1.jpg"></a></div>
                <h3 class="post_titile"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>
              </li>
              
              <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="tittle_text">Kurumsal İletişim</a> </h2>
            <ul class="catg1_nav">
              <li>
                <div class="catgimg_container"> <a href="gündenayresim/is_basvurusu.jpg" hight="100" width="100" class="catg1_img"><img alt="" src="is_basvurusu.jpg"></a></div>
                <h3 class="post_tittle"><a href="pages/single.html">Vestibulum ut est augue, in varius</a></h3>

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
                  <div class="catgimg2_container"> <a href="gazetehaberi.php"><img alt="" src="images/390x240x1.jpg"></a> </div>
                  <h2 class="catg_titile"><a href="gazetehaberi.php">Gündenay Kafe Gazetelerde</a></h2>
                  <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                </li>
              </ul>
            </div>
            <div class="business_category_right wow fadeInDown">
              <ul class="small_catg">
                <li>
                  <div <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="https://tr-tr.facebook.com/gundenay/"><strong>Facebook</strong></a></h4>
                      <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="https://www.instagram.com/explore/locations/889090711250971/akarca-gundenay-cafe/">Twitter</a></h4>
                      <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div <a class="foursquare" href="#"><i class="fa fa-foursquare"></i></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="https://tr.foursquare.com/v/g%C3%BCndenay-kafe/4f9523f6e4b032461a9cb7e9/photos">Foursquare</a></h4>
                      <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
                    </div>
                    <div <a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="https://www.instagram.com/explore/locations/889090711250971/akarca-gundenay-cafe/">İnstagram</a></h4>
                      <div class="comments_box"> <span class="meta_date">14/12/2045</span> <span class="meta_comment"><a href="#">No Comments</a></span> </div>
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
            <h2>Haberler</h2>
            <ul class="small_catg popular_catg wow fadeInDown">
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="images/112x112.jpg"> </a>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra </p>
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


