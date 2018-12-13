<?php
require_once 'header.php';

?>

<!-- Header Area End Here -->
<!-- Main Banner 1 Area Start Here -->
<div class="main-banner2-area">
    <div class="container">
        <div class="main-banner2-wrapper">
            <h1>E-Target Ürün Alım Platformuna Hoşgeldiniz</h1>
            <p>Aramak istediğiniz ürünü lütfen giriniz...</p>
            <form action="arama-detay" method="POST">
                <div class="banner-search-area input-group">


                    <input class="form-control" required="" minlength="3" name="searchkeyword" placeholder="Ne aramıştınız . . ." type="text">


                    <span class="input-group-addon">
                        <button type="submit" name="searchsayfa">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Trending Products Area End Here -->
<!-- Main Banner 1 Area End Here -->
<!-- Newest Products Area Start Here -->
<div class="newest-products-area bg-secondary section-space-default">
    <div class="container">
        <h2 class="title-default">Ürünler</h2>
    </div>
    <div class="container-fluid" id="isotope-container">
        <div class="isotope-classes-tab isotop-box-btn-white">




        </div>

        <div class="row featuredContainer">


          <?php
          $urunsor=$db->prepare("SELECT urun.urun_ad,urun.kategori_id,urun.urun_id,urun.urun_fiyat,urun.urunfoto_resimyol,urun.kullanici_id,urun.urun_durum,urun.urun_onecikar,kategori.kategori_id,kategori.kategori_ad FROM urun INNER JOIN kategori ON urun.kategori_id=kategori.kategori_id  order by urun_zaman,urun_onecikar DESC ");
          $urunsor->execute(array(
            'onecikar' => 1,
            'durum' => 1
        ));





        while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)) { ?>

        <!-- Start Ürün Anasayfa Listeleme -->
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 yenigelen plugins">
            <div class="single-item-grid">
                <div class="item-img">
                    <a href="urun-<?=seo($uruncek['urun_ad'])."-".$uruncek['urun_id'] ?>"><img style="width: 451px; height: 252px;" src="<?php echo $uruncek['urunfoto_resimyol'] ?>" alt="product" class="img-responsive"></a>
                    <div class="trending-sign" data-tips="Öne Çıkan Ürün"><i class="fa fa-bolt" aria-hidden="true"></i></div>
                </div>
                <div class="item-content">
                    <div class="item-info">
                        <h3><a href="urun-<?=seo($uruncek['urun_ad'])."-".$uruncek['urun_id'] ?>""><?php echo $uruncek['urun_ad'] ?></a></h3>
                        <span><a href="kategoriler-<?=seo($uruncek['kategori_ad'])."-".$uruncek['kategori_id'] ?>"><?php echo $uruncek['kategori_ad'] ?></a></span>
                        <div class="price"><?php echo $uruncek['urun_fiyat'] ?> TL</div>
                    </div>

                </div>
            </div>
        </div>

        <?php } ?>

        <!-- Finish Ürün Anasayfa Listeleme -->








    </div>

</div>
</div>


<?php require_once 'footer.php'; ?>
