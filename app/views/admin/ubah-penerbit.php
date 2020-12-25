<div class="container py-3">

    <h3 class="mt-5 mb-3 pt-2 text-center">Form Ubah Penerbit</h3>

    <form action="" method="post">
        <div class="row">
            <div class="col-sm-10">
                <div class="form-group">
                    <label for="nama_penerbit">Nama Penerbit</label>
                    <input class="form-control" type="text" name="nama_penerbit" id="nama_penerbit" value="<?= $data['penerbit']['nama_penerbit'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input class="form-control" type="text" name="alamat" id="alamat" value="<?= $data['penerbit']['alamat'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <input class="form-control" type="number" name="no_telp" id="no_telp" value="<?= $data['penerbit']['no_telp'] ?>" required>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit" name="submit">Ubah Penerbit</button>
        <a href="<?= BASEURL ?>/admin/penerbit" class="btn btn-warning">Batal</a>
    </form>
</div>