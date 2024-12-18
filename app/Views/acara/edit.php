<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Update Data acara &mdash; Go Wedding </title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('acara') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Acara</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Data Acara</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('acara/' . $acara->id_acara)  ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label>Nama Acara</label>
                        <input type="text" name="nama_acara" value="<?= $acara->nama_acara ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Acara</label>
                        <input type="date" name="date_acara" value="<?= $acara->date_acara ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>info</label>
                        <textarea name="info_acara" class="form-control"><?= $acara->info_acara ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
                        <button type="reset" class="btn btn-secondary"><i>Reset</i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>