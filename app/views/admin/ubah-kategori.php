<div class="container py-3">

    <h3 class="mt-5 mb-3 pt-2 text-center">Form Ubah Kategori</h3>

    <form action="" method="post">
        <div class="row">
            <div class="col-sm-10">
                <div class="form-group">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input class="form-control" type="text" name="nama_kategori" id="nama_kategori" value="<?= $data['kategori']['nama_kategori'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input class="form-control" type="text" name="keterangan" id="keterangan" value="<?= $data['kategori']['keterangan'] ?>" required>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Ubah Kategori</button>
        <a href="<?= BASEURL ?>/admin/kategori" class="btn btn-warning">Batal</a>
    </form>
</div>