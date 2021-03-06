<?php
ob_start();
session_start();
date_default_timezone_set('Europe/Istanbul');
//error_reporting(0); //Hatalar Gizlenir => Hatalarınızı göremezsiniz. /tüm işler bittikten sonra kullanın.
require_once 'nedmin/netting/baglan.php';
require_once 'nedmin/netting/islem.php';
require_once 'nedmin/production/fonksiyon.php';

if (isset($_SESSION['userkullanici_mail'])) {


  $kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
  $kullanicisor->execute(array(
    'mail' => $_SESSION['userkullanici_mail']
));
  $say=$kullanicisor->rowCount();
  $kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

  //Kullanıcı ID Session Atama
  if (!isset($_SESSION['userkullanici_id'])) {

     $_SESSION['userkullanici_id']=$kullanicicek['kullanici_id'];
 }



}


?>
  


<!DOCTYPE html>
<html lang="en">
	<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">
    <!--Google Webfont-->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700' rel='stylesheet' type='text/css'>
    <!--Favicon-->
	</head>
  <body>
    <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="newsfeed"><img src="img/target.png" style="width:35px" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown"><a href="cekilis.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>">Çekiliş</a></li>
              <li class="dropdown"><a href="timeline.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>">Genel Hedefler</a></li>
              <li class="dropdown"><a href="urunler.php">Ürünler</a></li>
              <li class="dropdown"><a href="hesabim.php">Hesabım</a></li>
              <li class="dropdown"><a href="logout.php" id="logout-button">Çıkış</a></li>
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Ara...">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

          <!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3 static">
            <div class="profile-card">
            	<img src="<?php echo $kullanicicek['kullanici_magazafoto'] ?>" alt="user" class="profile-photo" />
            	<h5><a href="timeline.html" class="text-white"><?php echo $kullanicicek['kullanici_ad']." ".substr($kullanicicek['kullanici_soyad'], 0,1) ?>.</a></h5>
            <!--	<a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>-->
            </div><!--profile card ends-->
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div><a href="hedefbasvuru.php">Hedef Belirle</a></div></li>
              <li><i class="ion-ios-briefcase"></i><div><a href="timeline.php?kullanici_id=<?php echo $kullanicicek['kullanici_id'] ?>">İnsanların Hedeflleri</a></div></li>
              <li><i class="icon ion-ios-people-outline"></i><div><a href="newsfeed-friends.php">Üyeler</a></div></li>
              <li><i class="icon ion-chatboxes"></i><div><a href="gelen-mesajlar.php">Mesajlar</a></div></li>
              <li><i class="icon ion-ios-football"></i><div><a href="dino.php">Eğlence</a></div></li>
            </ul><!--news-feed links ends-->

          </div>
    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            <div class="create-post">
            	<div class="row">
            		<div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="<?php echo $kullanicicek['kullanici_magazafoto'] ?>" alt="" class="profile-photo-md" />
                    <form action="" method="POST">
                    <textarea name="durum" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Ne Düşünüyorsun ? "></textarea>                   
                  </div>
                </div>
            		<div class="col-md-5 col-sm-5">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                      <li><a href="#"><i class="ion-compose"></i></a></li>
                      <li><a href="#"><i class="ion-images"></i></a></li>
                      <li><a href="#"><i class="ion-ios-videocam"></i></a></li>
                      <li><a href="#"><i class="ion-map"></i></a></li>
                    </ul>
                    <button  type="submit" class="btn btn-primary pull-right" name="btnGonder">Gönder</button>
                    </form>
                  </div>
                </div>
            	</div>
            </div><!-- Post Create Box End-->
  

            <!-- Post Content
            ================================================= -->
            <div class="post-content">
            <?php 
                $durumsor=$db->prepare("SELECT *, (SELECT Count(*) FROM begen WHERE durum_id = durum.durum_id) AS begenen_sayisi FROM durum INNER JOIN kullanici on kullanici.kullanici_id=durum.kullanici_id
                where durum.kullanici_id=:kullanici_id
                 order by zaman DESC");
                    $durumsor->execute(array(
                        'kullanici_id' => $_SESSION['userkullanici_id']
                    ));
                    $say=0;
                    while($durumlarıcek=$durumsor->fetch(PDO::FETCH_ASSOC)) { $say++?>
                     
                    <div class="user-info" style="margin-top:5%">
                    <img src="<?php echo $kullanicicek['kullanici_magazafoto'] ?>" alt="user" class="profile-photo-md pull-left" /><div class="post-detail">
                    <!---Kullanıcı adı ve soyadı çekme -->
                      <h5><a href="timeline.html" class="profile-link"><?php echo $kullanicicek['kullanici_ad']." ".substr($kullanicicek['kullanici_soyad'], 0,1) ?>.</a></h5>
                      <p class="text-muted"><?php echo $durumlarıcek['zaman'] ?></p>
                    </div>
                    <div class="line-divider"></div>
                    <div class="post-text"><!-- Durum tablosudan çekilen veriler buraya gelecek -->
                    <p><?php echo $durumlarıcek['durum'] ?></p>
                    <a href="newsfeed?durum_id=<?php echo $durumlarıcek['durum_id'] ?>"><button class="btn btn-primary btn-xs" style="float:right;">Düzenle</button></a>
                    </p>
                    </div>
                    <div class="reaction"><!--Beğeni kısmı buraya gelecek -->
                      <a class="btn text-green" onclick="begen(<?php echo $durumlarıcek['durum_id'] ?>);">
                        <i class="icon ion-thumbsup"></i>Beğeni <label id="begeni_sayisi_<?php echo $durumlarıcek['durum_id'] ?>"><?php echo $durumlarıcek['begenen_sayisi'] ?></label>
                      </a>
                    </div>      
                    <div class="line-divider"></div>
                   <div class="post-comment"><!--Yorumlar buraya gelecek -->
                    <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                    <p><a href="timeline.html" class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                    </div>
                   <div class="post-comment" style="margin-top:3%;">
                   <table>  
                      <tr>
                        <td>
                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                        </td>
                        <td><input type="text" class="form-control" placeholder="Yorum Gönder">
                        </td>
                        <td><button class="btn btn-primary btn-xs" style="float:right;">Gönder</button></a></td>
                      </tr>
                   </table>
                   <div class="line-divider"></div>
                    </div>
                  </div>
                  <?php } ?>
            </div>
          </div>

           <!-- Newsfeed Common Side Bar Right
          ================================================= -->
    			<div class="col-md-2 static">
            <div class="suggestions" id="sticky-sidebar">
              <h4 class="grey">Sistemdeki Kişiler</h4>
              <div class="follow-user">
                <ul>
                  <?php 
                    $cekFollow=$db->prepare("SELECT kullanici_ad,kullanici_soyad,kullanici_magazafoto FROM kullanici limit 7");
                    $cekFollow->execute();
                    while($kullaniclariCek=$cekFollow->fetch(PDO::FETCH_ASSOC)) { ?>
                    <li><a href="<?=seo($kullaniclariCek["kullanici_ad"],$kullaniclariCek["kullanici_soyad"],$kullaniclariCek["kullanici_magazafoto"]) ?>">
                    <img src="<?php echo $kullaniclariCek['kullanici_magazafoto'] ?>" alt="user" class="profile-photo"/>
                    <?php echo $kullaniclariCek['kullanici_ad']." ".substr($kullaniclariCek['kullanici_soyad'], 0,1) ?>.
                    <?php } 
                  ?>
                </ul>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </div>

    <!-- Footer
    ================================================= -->
    <footer id="footer">
      <div class="container">
      	<div class="row">
          <div class="footer-wrapper">
             
          </div>
      	</div>
      </div>
      <div class="copyright">
        <p>E-Target</p>
      </div>
		</footer>
    
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
    <!-- Scripts
    ================================================= -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&callback=initMap"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
    <script>
    function begen( durum_id ) {
      $.post( "./nedmin/netting/islem.php", { durum_begen: true, durum_id: durum_id }, function( data ) {
        var begeni_sayisi = $("#begeni_sayisi_"+durum_id);
        begeni_sayisi.html(parseInt(begeni_sayisi.html())+1);
      })
    }
    </script>

  </body>
</html>
