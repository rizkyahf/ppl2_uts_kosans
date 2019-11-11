<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="display-3">Kamar Kos</h1>
            <hr class="title">
        </div>
    </div>
    <div class="row">
        <?php foreach($kamar as $row){ ?>
        <div class="col-6 col-md-3">
            <div class="card">
                <img src="<?=base_url();?>assets/img/upload/<?=$row['foto'];?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?=$row['nama_tipe']; ?></h5>
                    <p>Harga <?="Rp. ".number_format($row['harga_perbulan'],2,',','.'); ?> perbulan</p>
                    <p>Jumlah unit: <?=$row['jumlah_unit']; ?></p>
                    <p>Unit Tersedia: <?=$row['unit_tersedia']; ?></p>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    <a  href="<?=base_url();?>index.php/c_cart/add/<?=$row['id_tipe']; ?>" class="btn btn-primary <?php if($row['unit_tersedia']==0){echo "disabled";} ?>">Pilih Kamar</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>