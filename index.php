<!DOCTYPE html>
	<head>
			<meta charset="utf-8">
    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    
	</head>
	<body>
    <!-- Header
    ================================================= -->
		<header id="header" class="lazy-load">
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
            <a class="navbar-brand" href="index.html"><img src="img/target.png" style="width:35px;" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown"><a href="#">Yardım</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right main-menu">
								<li class="dropdown"><a href="#">Hakkımızda</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right main-menu">
								<li class="dropdown"><a href="login">Giriş</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right main-menu">
								<li class="dropdown"><a href="index">Anasayfa</a></li>
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

    <!-- Top Banner
    ================================================= -->
		<section id="banner">
			<div class="container">

        <!-- Sign Up Form
        ================================================= -->
        <div class="sign-up-form">
					<a href="index.html" class="logo"><img src="img/target.png" width="100px" alt="Friend Finder"/></a>
					<h2 class="text-white">E-Target</h2>
					<div class="line-divider"></div>
					<div class="form-wrapper">
						<p class="signup-text">Hedeflerinize ulaşacağınız yerdesiniz</p>
						<form action="nedmin/netting/kullanici.php" method="POST" id="personal-info-form">

							<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                          
											<div class="form-group">
													<label class="control-label" for="first-name">Mail Adresiniz *</label>
													<input type="text" id="first-name" required="" name="kullanici_mail" placeholder="(Kullanıcı Adınız Olacak!)" class="form-control">
											</div>
									</div>
							 
							</div>
							

							<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
											<div class="form-group">
													<label class="control-label" for="first-name">Adınız *</label>
													<input type="text" id="first-name" required="" placeholder="Ad..." name="kullanici_ad" class="form-control">
											</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
											<div class="form-group">
													<label class="control-label" for="last-name">Soyadınız *</label>
													<input type="text" id="last-name" required="" placeholder="Soyad..." name="kullanici_soyad" class="form-control">
											</div>
									</div>
							</div>

							<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
											<div class="form-group">
													<label class="control-label" for="first-name">Şifreniz *</label>
													<input type="password" id="first-name" required="" placeholder="Şifre.." name="kullanici_passwordone" class="form-control">
											</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
											<div class="form-group">
													<label class="control-label" for="last-name">Şifreniz Tekrar *</label>
													<input type="password" id="last-name" required="" placeholder="Şifre Tekrar " name="kullanici_passwordtwo" class="form-control">
											</div>
									</div>
							</div>
							<div class="row">
                              
                              
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
										 <div class="pLace-order">
												 <button class="btn-secondary" type="submit" name="musterikaydet" >Gönder</button>
										 </div>
								 </div>
						 </div> 
				 </form>              
					</div>
					<a href="login">Zaten üyemisiniz ?</a>
					<img class="form-shadow" src="images/bottom-shadow.png" alt="" />
				</div><!-- Sign Up Form End -->

        <svg class="arrows hidden-xs hidden-sm">
          <path class="a1" d="M0 0 L30 32 L60 0"></path>
          <path class="a2" d="M0 20 L30 52 L60 20"></path>
          <path class="a3" d="M0 40 L30 72 L60 40"></path>
        </svg>
			</div>
		</section>

    <!-- Features Section
    ================================================= -->
		<section id="features">
			<div class="container wrapper">
				<h1 class="section-title slideDown">E-Target Sosyal Medya</h1>
				<div class="row slideUp">
					<div class="feature-item col-md-2 col-sm-6 col-xs-6 col-md-offset-2">
						<div class="feature-icon"><i class="icon ion-person-add"></i></div>
						<h3>Arkadaş edin</h3>
					</div>
					<div class="feature-item col-md-2 col-sm-6 col-xs-6">
						<div class="feature-icon"><i class="icon ion-images"></i></div>
						<h3>Durum Paylaşın</h3>
					</div>
					<div class="feature-item col-md-2 col-sm-6 col-xs-6">
						<div class="feature-icon"><i class="icon ion-chatbox-working"></i></div>
						<h3>Hedef Belirleyin</h3>
					</div>
					<div class="feature-item col-md-2 col-sm-6 col-xs-6">
						<div class="feature-icon"><i class="icon ion-compose"></i></div>
						<h3>Kazanın</h3>
					</div>
				</div>
				<h2 class="sub-title">senin gibi harika insanları bul</h2>
				<div id="incremental-counter" data-value="101242"></div>
				<p>Her yerden bizimleler</p>
				<img src="images/face-map.png" alt="" class="img-responsive face-map slideUp hidden-sm hidden-xs" />
			</div>

		</section>

    <!-- Download Section
    ================================================= -->
		<section id="app-download">
			<div class="container wrapper">
				<h1 class="section-title slideDown">indir</h1>
				<ul class="app-btn list-inline slideUp">
					<li><button class="btn-secondary"><img src="images/app-store.png" alt="App Store" /></button></li>
					<li><button class="btn-secondary"><img src="images/google-play.png" alt="Google Play" /></button></li>
				</ul>
				<h2 class="sub-title">her zaman her yerde bağlantıda kalın</h2>
				<img src="images/iPhone.png" alt="iPhone" class="img-responsive" />
			</div>
		</section>

    <!-- Image Divider
    ================================================= -->
    <div class="img-divider hidden-sm hidden-xs"></div>

    <!-- Facts Section
    ================================================= -->
		<section id="site-facts">
			<div class="container wrapper">
				<div class="circle">
					<ul class="facts-list">
						<li>
							<div class="fact-icon"><i class="icon ion-ios-people-outline"></i></div>
							<h3 class="text-white">1,01,242</h3>
							<p>Kayıtlı insanlar</p>
						</li>
						<li>
							<div class="fact-icon"><i class="icon ion-images"></i></div>
							<h3 class="text-white">21,01,242</h3>
							<p>Yayınlanan yazılar</p>
						</li>
						<li>
							<div class="fact-icon"><i class="icon ion-checkmark-round"></i></div>
							<h3 class="text-white">41,242</h3>
							<p>Çevrimiçi İnsanlar</p>
						</li>
					</ul>
				</div>
			</div>
		</section>

    <!-- Live Feed Section
    ================================================= -->
		<section id="live-feed">
			<div class="container wrapper">
				<h1 class="section-title slideDown">Hedef</h1>
				<ul class="online-users list-inline slideUp">
					<li><a href="#" title="Alexis Clark"><img src="images/users/user-5.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
          <li><a href="#" title="James Carter"><img src="images/users/user-6.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
          <li><a href="#" title="Robert Cook"><img src="images/users/user-7.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
          <li><a href="#" title="Richard Bell"><img src="images/users/user-8.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
          <li><a href="#" title="Anna Young"><img src="images/users/user-9.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
          <li><a href="#" title="Julia Cox"><img src="images/users/user-10.jpg" alt="" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
				</ul>
				<h2 class="sub-title">şimdi neler olduğunu gör</h2>
				<div class="row">
					<div class="col-md-4 col-sm-6 col-md-offset-2">
						<div class="feed-item">
							<img src="images/users/user-1.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Sarah</a> just posted a photo from Moscow</p>
								<p class="text-muted">20 Secs ago</p>
							</div>
						</div>
						<div class="feed-item">
							<img src="images/users/user-4.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">John</a> Published a post from Sydney</p>
								<p class="text-muted">1 min ago</p>
							</div>
						</div>
						<div class="feed-item">
							<img src="images/users/user-10.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Julia</a> Updated her status from London</p>
								<p class="text-muted">5 mins ago</p>
							</div>
						</div>
						<div class="feed-item">
							<img src="images/users/user-3.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Sophia</a> Share a photo from Virginia</p>
								<p class="text-muted">10 mins ago</p>
							</div>
						</div>
						<div class="feed-item">
							<img src="images/users/user-2.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Linda</a> just posted a photo from Toronto</p>
								<p class="text-muted">20 mins ago</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="feed-item">
							<img src="images/users/user-17.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Nora</a> Shared an article from Ohio</p>
								<p class="text-muted">22 mins ago</p>
							</div>
						</div>
						<div class="feed-item">
							<img src="images/users/user-18.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Addison</a> Created a poll from Barcelona</p>
								<p class="text-muted">23 mins ago</p>
							</div>
						</div>
						<div class="feed-item">
							<img src="images/users/user-11.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Diana</a> Posted a video from Captown</p>
								<p class="text-muted">27 mins ago</p>
							</div>
						</div>
						<div class="feed-item">
							<img src="images/users/user-1.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Sarah</a> Shared friend's post from Moscow</p>
								<p class="text-muted">30 mins ago</p>
							</div>
						</div>
						<div class="feed-item">
							<img src="images/users/user-16.jpg" alt="user" class="img-responsive profile-photo-sm" />
							<div class="live-activity">
								<p><a href="#" class="profile-link">Emma</a> Started a new job at Torronto</p>
								<p class="text-muted">33 mins ago</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <!-- Footer
    ================================================= -->
		<footer id="footer">
      <div class="container">
      	<div class="row">
          <div class="footer-wrapper">
            <div class="col-md-3 col-sm-3">
              <a href=""><img src="img/target.png" width="50px" alt="" class="footer-logo" /></a>
              <ul class="list-inline social-icons">
              	<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-googleplus"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
              	<li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
              </ul>
            </div>
           
          </div>
      	</div>
      </div>
      <div class="copyright">
        <p>copyright @e-target</p>
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
    <script src="js/jquery.appear.min.js"></script>
		<script src="js/jquery.incremental-counter.js"></script>
    <script src="js/script.js"></script>
    
	</body>
</html>
