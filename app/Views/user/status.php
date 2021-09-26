<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <h1 class="h4 mb-5 text-gray-800">Status Pendaftaran</h1>

    <div class="card text-center">
        <div class="card-header bg-danger"></div>
        <div class="card-body">
            <h5 class=" h3 card-title">Proses Validasi</h5>
            <img  src="<?= base_url(); ?>/img/UnkemptSarcasticAbalone-max-1mb.gif" width="100px">
            <p class="card-text">Berkas masih divalidasi admin. Tunggu ya nanti kalau sudah bakal ada jadwal buat interview di bawah.</p>
            <!-- <a href="#" class="btn btn-primary">Klik Untuk Memulai Interview</a> -->
        </div>
        <div class="card-footer bg-danger"></div>
    </div>

    <div class="card text-center">
        <div class="card-header bg-danger"></div>
        <div class="card-body">
            <h5 class=" h3 card-title">Jadwal Interview</h5>
            <img  src="<?= base_url(); ?>/img/UnkemptSarcasticAbalone-max-1mb.gif" width="100px">
            <p class="card-text">Berkas masih divalidasi admin. Tunggu ya nanti kalau sudah bakal ada jadwal buat interview di bawah.</p>
            <!-- <a href="#" class="btn btn-primary">Klik Untuk Memulai Interview</a> -->
        </div>
        <div class="card-footer bg-danger"></div>
    </div>




</div>
<?= $this->endSection(); ?>