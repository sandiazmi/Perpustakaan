<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="card bg-light mt-3">
        <div class="card-header">
          <h4>Tambah Data Kategori</h4>
        </div>
        <div class="card-body">
          <?= $this->session->flashdata('message'); ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="nm_kategori">Nama Kategori</label>
              <input type="text" name="nm_kategori" id="nm_kategori" class="form-control">
              <small class="form-text text-danger"><?= form_error('nm_kategori'); ?></small>
            </div>
            <div class="float-right">
              <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
            </div>
          </form>
        </div>
      </div>
  </section>
</div>