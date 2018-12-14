<?php 

include 'header.php'; 
islemkontrol();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Mesaj Listeleme <small>,

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>


            </small></h2>

            <div class="clearfix"></div>

          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
              <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mesaj Tarihi</th>
                    <th scope="col">Gönderen</th>
                    <th scope="col">Durum</th>
                    <th scope="col">Detay</th>
                    <th></th>
                  </tr>
              </thead>

              <tbody>

                  <?php 

                   $mesajsor=$db->prepare("SELECT mesaj.*,kullanici.* FROM mesaj INNER JOIN kullanici ON mesaj.kullanici_gon=kullanici.kullanici_id where mesaj.kullanici_gel=:id order by mesaj_okunma,mesaj_zaman DESC");
                  $mesajsor->execute(array(

                    'id' => $_SESSION['userkullanici_id']

                  ));

                  
                 /* $mesajsor=$db->prepare("SELECT * FROM mesaj where kullanici_gel=:id order by mesaj_zaman DESC");
                  $mesajsor->execute(array(

                    'id' => $_SESSION['userkullanici_id']

                  ));*/

                  $say=0;

                  while($mesajcek=$mesajsor->fetch(PDO::FETCH_ASSOC)) { $say++;

                   $kullanici_gon=$mesajcek['kullanici_gon'];
                    ?>


                  <tr>
                    <th scope="row"><?php echo $say ?></th>
                    <td><?php echo $mesajcek['mesaj_zaman'] ?></td>
                    <td><?php echo $mesajcek['kullanici_ad']." ".$mesajcek['kullanici_soyad'] ?></td>
                    <td>

                      <?php 

                      if ($mesajcek['mesaj_okunma']==0) {?>

                      <i style="color:green" class="fa fa-circle" aria-hidden="true">

                        <?php } else {?>

                           <i class="fa fa-circle" aria-hidden="true">
                       <?php }
                        ?>




                      </td>
                      <td><a href="mesaj-detay?mesaj_id=<?php echo $mesajcek['mesaj_id'] ?>&kullanici_gon=<?php echo $mesajcek['kullanici_gon'] ?>"><button class="btn btn-primary btn-xs">Mesajı Oku</button></a></td>

                      <td><a onclick="return confirm('Bu mesajı silmek istiyormusunuz? \n İşlem geri alınamaz...')" href="nedmin/netting/kullanici.php?gelenmesajsil=ok&mesaj_id=<?php echo $mesajcek['mesaj_id'] ?>"><button class="btn btn-danger btn-xs">Sil</button></a></td>

                    </tr>

                    <?php } ?>


                  </tbody>
                </table>


      <!-- Div İçerik Bitişi -->


    </div>
  </div>
</div>
</div>




</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
