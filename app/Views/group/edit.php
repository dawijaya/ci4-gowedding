<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Update Data Group &mdash; Go Wedding </title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('groups') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Group</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Group Kontak</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('groups/update/' . $groups->id_groups)  ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label>Nama Group</label>
                        <input type="text" name="nama_groups" value="<?= $groups->nama_groups ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>info</label>
                        <textarea name="info_groups" class="form-control"><?= $groups->info_groups ?></textarea>
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