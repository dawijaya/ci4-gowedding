<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Update Contact &mdash; Go Wedding </title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('contacts') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Contact</h1>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Kontak</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('contacts/' . $contact->id_contact)  ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Group *</label>
                        <select name="id_group" class="form-control" required>
                            <option value="" hidden> </option>
                            <?php foreach ($groups as $key => $value) : ?>
                                <option value="<?= $value->id_groups ?>" <?= $contact->id_group == $value->id_groups ? 'selected' : null ?>><?= $value->nama_groups ?></option>
                            <?php endforeach; ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Kontak *</label>
                        <input type="text" name="nama_contact" value="<?= $contact->nama_contact ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Alias</label>
                        <input type="text" name="nama_alias" value="<?= $contact->nama_alias ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="number" name="phone" value="<?= $contact->phone ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?= $contact->email ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="address" value="<?= $contact->address ?>" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>info (Kota / Instansi / dll)</label>
                        <textarea name="info_contact" value="<?= $contact->info_contact ?>" class="form-control"></textarea>
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