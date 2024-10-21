<?= $this->extend('layout/default') ?>
<?= $this->section('title') ?>
<title>Data Groups &mdash; Go Wedding </title>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('groups') ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Group Trash</h1>
    </div>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">X</button>
                <b>Success !</b>
                <?= session()->getFlashdata('success') ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">X</button>
                <b>Error !</b>
                <?= session()->getFlashdata('error') ?>
            </div>
        </div>
    <?php endif; ?>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Grup Kontak - Trash</h4>
                <div class="card-header-action">
                    <a href="<?= site_url('groups/restore') ?>" class="btn btn-info">Restore All </a>
                    <form action="<?= site_url('groups/delete2') ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data?')">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE"> <!-- Menambahkan method override -->
                        <button class="btn btn-danger btn-sm">
                            Del All permanently
                        </button>
                    </form>
                    <!-- <a href="<?= site_url('groups/delete2') ?>" class="btn btn-danger">Del All permanently </a> -->
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama Group</th>
                            <th>Info</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <?php foreach ($groups as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->nama_groups ?></td>
                                <td><?= $value->info_groups ?></td>
                                <td class="text-center " style="width:15%">
                                    <a href="<?= site_url('groups/restore/' . $value->id_groups) ?>" class="btn btn-info btn-sm">
                                        Restore
                                    </a>
                                    <form action="<?= site_url('groups/delete2/' . $value->id_groups) ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data?')">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE"> <!-- Menambahkan method override -->
                                        <button class="btn btn-danger btn-sm">
                                            Delete permanently
                                        </button>
                                    </form>

                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>