<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="display-3">Cart</h1>
            <hr class="title">
        </div>
    </div>
    <div class="row">
        <div class="col-2 offset-10">
            <a class='btn btn-danger' styles="" href="<?=base_url();?>index.php/c_cart/clear_all">
                Clear Cart
            </a>
        </div>
        <br><br><br><br>
        <div class="col-12">
            <table class="table">
                <tr class="success">
                    <td>No. </td>
                    <td>Tipe Kamar </td>
                    <td>Jumlah </td>
                    <td>Harga </td>
                    <td>Total </td>
                    <td>Hapus </td>
                </tr>
                <?php
                    $i = 1;
                    $sum = 0;
                    $count = 0;
                    if(isset($_SESSION['cart'])){
                        foreach($_SESSION['cart'] as $row) {
                            // $id = $_SESSION['cart'][]
                            $count = $row['harga'] * $row['jumlah'];
                            $sum = $sum + $count;
                ?>
                <tr>
                    <td><?=$i;?>.</td>
                    <td><?=$row['nama_kamar'];?></td>
                    <td>
                        <a class="btn btn-success" href="<?=base_url();?>index.php/c_cart/decrease_jumlah/<?=$row['id'];?>">
                            <span class="fa fa-minus"></span>
                        </a>
                        &nbsp;<?=$row['jumlah'];?>&nbsp;
                        <a class="btn btn-success" href="<?=base_url();?>index.php/c_cart/increase_jumlah/<?=$row['id'];?>">
                            <span class="fa fa-plus"></span>
                        </a>
                    </td>
                    <td>Rp. <?=number_format($row['harga'], 0, ',', '.');?></td>
                    <td>Rp. <?=number_format($count, 0, ',', '.');?></td>
                    <td>
                        <a class="btn btn-danger" href="<?=base_url();?>index.php/c_cart/clear_by_id/<?=$row['id'];?>">
                            <span class="fa fa-times"></span>
                        </a>
                    </td>
                </tr>
                <?php
                            $i++;
                        }
                    }
                    else {
                ?>
                <tr>
                    <td colspan='6' style="text-align: center;">
                        There's no item selected
                    </td>
                </tr>
                <?php
                    }
                ?>
                <tr class='success'>
                    <td colspan='4' style="text-align: right;">
                        <b>Total</b>
                    </td>
                    <td>Rp. <?=number_format($sum, 0, ',', '.');?></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-md-offset-10">
            <?php if(isset($_SESSION['cart'])){ ?>
            <a class="btn btn-warning btn-block" href="<?=base_url();?>index.php/c_transaksi/add_data_pembeli">Checkout</a>
            <?php } ?>
        </div>
    </div>
</div>