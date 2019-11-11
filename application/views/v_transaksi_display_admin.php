<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="display-3">Cart - <?=$this->session->userdata('username');?></h1>
            <hr class="title">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <table class="table">
                <tr class="primary">
                    <th>No. Transaksi</th>
                    <th>Tgl. Transaksi</th>
                    <th>Nama Penyewa</th>
                    <th>Total</th>
                    <th>Status Transaksi</th>
                    <th>Aksi</th>
                </tr>
                <?php
                    $class = "";
                    foreach($transaksi as $row) {
                        if($row['status'] == 'Belum Bayar') $class = 'warning';
                        else if($row['status'] == 'Sudah Bayar') $class = 'success';

                ?>
                <tr class="<?=$class;?>">
                    <td><?=$row['no_transaksi'];?>.</td>
                    <td><?=date('d-M-Y H:i:s', strtotime($row['tanggal']));?></td>
                    <td><?=$row['nama'];?></td>
                    <td>Rp. <?=number_format($row['total_bayar'], 0, ',', '.');?></td>
                    <td><?=$row['status'];?></td>
                    <td>
                        <?php if($row['status'] == 'Belum Bayar') { ?>
                        <a class="btn btn-primary btn-xs" href="<?=base_url();?>index.php/c_transaksi/update_sudahbayar/<?=$row['no_transaksi'];?>">
                            Update Sudah Bayar
                        </a>
                        <?php } ?>
                        <!-- <?php if($row['status'] == 'sdh_bayar') { ?>
                        <a class="btn btn-success btn-xs" href="<?=base_url();?>index.php/c_transaksi/update_sudahkirim/<?=$row['no_penjualan'];?>">
                            Update Sudah Kirim
                        </a>
                        <?php } ?> -->
                        <!-- <a class="btn btn-danger btn-xs" href="<?=base_url();?>index.php/c_transaksi/update_bataltransaksi/<?=$row['no_penjualan'];?>">
                            Batalkan Transaksi
                        </a> -->
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>