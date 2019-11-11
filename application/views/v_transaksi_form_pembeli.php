<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="display-3">Form Pembeli</h1>
            <hr class="title">
        </div>
    </div>
    <form method="POST" action="<?=base_url();?>index.php/c_transaksi/proses_transaksi" class="was-validated">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="judul_berita">Kode Transaksi</label>
                    <input type="text" autofocus placeholder="Nama Mahasiswa Terlapor" name="kode_transaksi" id="kode_transaksi" value="<?=uniqid();?>" class="form-control" readonly/>
                    <div class="invalid-feedback">
                        Nama Mahasiswa Terlapor harus diisi
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="judul_berita">Nama Penyewa</label>
                    <input type="text" autofocus placeholder="Nama Penyewa" name="nama_penyewa" id="nama_penyewa" class="form-control" required />
                    <div class="invalid-feedback">
                        Nama Penyewa harus diisi
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="judul_berita">No. HP</label>
                    <input type="text" autofocus placeholder="No. HP" name="no_hp" id="no_hp" class="form-control" required />
                    <div class="invalid-feedback">
                        No. HP harus diisi
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="isi_berita">Alamat Asal</label>
                    <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat Asal Penyewa"></textarea>
                </div>
            </div>
        </div>
        <div class="row button-form">
            <div class="col-md-3 offset-3">
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-success btn-block" value="Proses" />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <a href="<?=base_url();?>index.php/c_cart/display" class="btn btn-danger btn-block">Batalkan</a>
                </div>
            </div>
        </div>
    </form>
</div>