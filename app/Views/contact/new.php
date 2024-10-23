<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Create Contact &mdash; Go Wedding </title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('contacts') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Buat Contact</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Buat Kontak Baru</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('contacts') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>Nama Kontak</label>
                        <input type="text" name="nama_contacts" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>info</label>
                        <textarea name="info_contacts" class="form-control"></textarea>
                    </div>
                    <div class="form-group ">
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i>Save</button>
                        <button type="reset" class="btn btn-secondary"><i>Reset</i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>