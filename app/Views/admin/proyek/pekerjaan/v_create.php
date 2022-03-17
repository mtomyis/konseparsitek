<?= $this->extend('layout/template_admin') ?>

<?= $this->section('content'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Proyek Pekerjaan</h1>
        </div>
        <form method="POST" action="<?= base_url('C_proyek/pekerjaan_save') ?>" class="needs-validation" novalidate="" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah data Pekerjaan</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" name="judul" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Lokasi</label>
                                <input type="text" name="lokasi" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori">
                                    <option value="Perencanaan">Perencanaan</option>
                                    <option value="Pengawasan">Pengawasan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Klien</label>
                                <input type="text" name="klien" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Awal</label>
                                <input name="tanggal_awal" type="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Akhir</label>
                                <input name="tanggal_akhir" type="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea rows="4" class="form-control" name="keterangan" required></textarea>
                            </div>

                            <div class="form-group">
                                <label>Dokumentasi</label>
                                <div class="custom-file mb-2">
                                    <input required id="gambar" type="file" name="gambar" class="form-control custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('gambar'); ?>
                                    </div>
                                    <label class="custom-file-label" for="gambar">Pilih gambar 1</label>
                                </div>
                                <div class="custom-file mb-2">
                                    <input required id="gambar2" type="file" name="gambar2" class="form-control custom-file-input <?= ($validation->hasError('gambar2')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('gambar2'); ?>
                                    </div>
                                    <label class="custom-file-label" for="gambar2">Pilih gambar 2</label>
                                </div>
                                <div class="custom-file mb-2">
                                    <input required id="gambar3" type="file" name="gambar3" class="form-control custom-file-input <?= ($validation->hasError('gambar3')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('gambar3'); ?>
                                    </div>
                                    <label class="custom-file-label" for="gambar3">Pilih gambar 3</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a class="btn btn-sm btn-icon btn-warning" href="<?= base_url('/proyek_pekerjaan') ?>">Kembali</a>
                            <!-- <a class="btn btn-sm btn-icon btn-success" type="submit">Simpan</a> -->

                            <button class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>
<?= $this->endSection() ?>