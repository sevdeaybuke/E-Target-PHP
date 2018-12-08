<?php
//include başka php dosyalarını projemize çalıştığımız sayfaya dahil eder.
include 'header.php';
include 'baglan.php';

?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>
                    <?php
                    session_start();
                    $kullanici=$_SESSION['kullanici_id'];
                    $sorgu="SELECT kullanici_ad from kullanici where kullanici_id=$kullanici and kullanici_yetki=5 ";
                    $tablo=$db->prepare($sorgu);
                    $tablo->execute();
                    $result = $tablo->fetch();
                    echo $result['kullanici_ad'];
                     ?>

                    Panele Hoşgeldiniz.</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">



                    <p>Sitenizin içeriğini yanda ki menüler aracılığı ile yönetebilirsiniz.</p>
                  </div>
                </div>
              </div>

              <!-- Bitiyor -->




            </div>
          </div>
        </div>
        <!-- /page content -->



      <?php include 'footer.php'; ?>
