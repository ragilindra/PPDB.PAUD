<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Admin</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Pendaftar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php foreach ($users as $user) : ?>
                        <?php if( $user->name == 'Belum Terdaftar') :?>
                    <tbody>
                         <tr>
                            <td><?= $user->fullname; ?></td>
                            <td><?= $user->jenis_kelamin; ?></td>
                            <td><?= $user->tempat_lahir; ?>, <?= $user->tanggal_lahir; ?></td>
                            <td>
                                <a  class="btn btn-primary btn-sm"  href="<?= base_url('admin/' . $user->userid); ?>">
                                    Detail
                                </a>
                            </td>
                        </tr>
                                       
                    </tbody>
                    <?php endif ?>
                <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
        </div>
        </div>
    </div>
    </div>

</div>
<?= $this->endSection(); ?>