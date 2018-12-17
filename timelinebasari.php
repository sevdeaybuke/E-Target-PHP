<?php
ob_start();
session_start();
date_default_timezone_set('Europe/Istanbul');
//error_reporting(0); //Hatalar Gizlenir => Hatalarınızı göremezsiniz. /tüm işler bittikten sonra kullanın.
require_once 'nedmin/netting/baglan.php';
require_once 'nedmin/netting/islem.php';
require_once 'nedmin/production/fonksiyon.php';

if (isset($_GET['kullanici_id'])) {


  $kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_id=:id ");
  $kullanicisor->execute(array(
    'id' => $_GET['kullanici_id']
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
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Hedefler</title>

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
            <li class="dropdown"><a href="timeline.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>">Genel Hedefler</a></li>
              <li class="dropdown"><a href="hedefler.php">Genel Hedefler</a></li>
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

    <div class="container">

      <!-- Timeline
      ================================================= -->
      <div class="timeline">
        <div class="timeline-cover">

          <!--Timeline Menu for Large Screens-->
          <div class="timeline-nav-bar hidden-sm hidden-xs">
            <div class="row">
              <div class="col-md-3">
                <div class="profile-info">
                  <img src="<?php echo $kullanicicek['kullanici_magazafoto']?>" alt="" class="img-responsive profile-photo" />
                  <h3><?php echo $kullanicicek['kullanici_ad']." ".$kullanicicek['kullanici_soyad'] ?></h3>
                  <!-- Hedef tablosundan hedef fiyatı çekilecek toplam-->
                  <?php
                  $coinsor=$db->prepare("SELECT SUM(hedef_fiyat) as hedef_fiyat FROM hedef WHERE kullanici_id=:kullanici_id");
                  $coinsor->execute(array(
                    'kullanici_id' => $_GET['kullanici_id']
                ));
                  $say=$coinsor->rowCount();
                  $coincek=$coinsor->fetch(PDO::FETCH_ASSOC);
                  ?>
                  <p class="text-muted"><b><?php echo ($coincek['hedef_fiyat']==0) ? '0': $coincek['hedef_fiyat']; ?></b>&nbsp;<i class="fa fa-bitcoin"></i></p>
                </div>
              </div>
              <div class="col-md-9">
                <ul class="list-inline profile-menu">
                  <li><a href="newsfeed.php">Anasayfa</a></li>
                  <li><a href="hedeflerim.php" >Benim Hedeflerim</a></li>
                  <li><a href="timeline-about.php?kullanici_id=<?php echo $kullanicicek['kullanici_id']; ?>">Hakkıımda</a></li>
                  <li><a href="timelinebasari.php"  class="active">Başarı Sözleri</a></li>
                </ul>
              </div>
            </div>
          </div><!--Timeline Menu for Large Screens End-->

        </div>
        <div id="page-contents">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-7">

              <!-- Post Create Box
              ================================================= -->
              <div class="create-post">
                <div class="row">

                </div>
              </div><!-- Post Create Box End-->

              <!-- Post content içerisine db deki tüm hedefler çekilecek -->    
              <?php
                $hedefsor=$db->prepare("SELECT * FROM basarisozleri");
                $hedefsor->execute();
                $say=0;

                while($hedefcek=$hedefsor->fetch(PDO::FETCH_ASSOC)) { $say++?>

                <div class="post-container">          
                  <div style="margin-left:80px;"><p><b><u>Günün Sözleri:</u> <?php echo $hedefcek['basari_sozleri']; ?></p></div>
                  <div class="post-detail">
                    
                  </div>
                </div>
                <?php } ?>
              <!-- Post Content
              ================================================= -->



            </div>
            <div class="col-md-2 static">
              <div id="sticky-sidebar">
                <!-- Kullanıcının hedefleri çekilecek-->
                <h4 class="grey"><?php echo $kullanicicek['kullanici_ad'] ?> hedefleri</h4>
                <?php
                $hedefsor=$db->prepare("SELECT * FROM hedef where kullanici_id=:kullanici_id order by hedef_zaman DESC");
                $hedefsor->execute(array(
                  'kullanici_id' => $_GET['kullanici_id']
                 ));
                $say=0;

                while($hedefcek=$hedefsor->fetch(PDO::FETCH_ASSOC)) { $say++?>
                <div class="feed-item">
                  <div class="live-activity">
                    <p><a href="#" class="profile-link"><?php echo $kullanicicek['kullanici_ad']; ?></a><b> <?php echo $hedefcek['hedef_ad']; ?></b></p>
                    <p class="text-muted"><?php echo $hedefcek['hedef_zaman']; ?></p>
                  </div>
                </div>
                <?php } ?>
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
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>
