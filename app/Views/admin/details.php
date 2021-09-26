<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h4  text-gray-800 mb-5">Detail Biodata <?=  $users->fullname ?></h1>

    <form action="/user/tambahData" method="POST"> 
        <?= csrf_field(); ?>
        <div class="row">
            <form>
            <div class="col-md-6 col-sm-12">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url(); ?>/img/<?= $users->user_image ?>" class="img-fluid rounded-start" alt="Foto">
                            
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Biodata</h5>
                                    <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
                                    <p class="form-control  form-control-sm"><?=  $users->fullname ?></p>
                                    
                                    <label for="formGroupExampleInput" class="form-label">Jenis Kelamin</label>
                                    <p class="form-control  form-control-sm"><?=  $users->jenis_kelamin ?></p>

                                    <label for="formGroupExampleInput" class="form-label">Tempat Lahir</label>
                                    <p class="form-control  form-control-sm"><?= $users->tempat_lahir ?></p>

                                    <label for="formGroupExampleInput" class="form-label">Tanggal Lahir</label>
                                    <p class="form-control  form-control-sm"><?= $users->tanggal_lahir ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col ">
                            <div class="card-body">
                                <h5 class="card-title">Biodata Orang Tua</h5>
                                        <label for="formGroupExampleInput" class="form-label">Nama Ayah</label>
                                        <p class="form-control  form-control-sm"><?= user()->father_name ?></p>
                                        
                                        <label for="formGroupExampleInput" class="form-label">Nama Ibu</label>
                                        <p class="form-control  form-control-sm"><?= user()->mother_name ?></p>

                                        <label for="formGroupExampleInput" class="form-label">Alamat</label>
                                        <p class="form-control  form-control-sm"><?= user()->adress ?></p>

                                        <label for="formGroupExampleInput" class="form-label">No Hp</label>
                                        <p class="form-control  form-control-sm"><?= user()->phone_number ?></p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if((user()->fullname) != null) : ?>
            <div class="row">
                <div class="col">
                    <div class=" text-center" >
                        <button  class="btn btn-secondary text-center" disabled style="width:100%">ANDA TELAH MENDAFTAR</button>
                    </div>
                </div>
            </div>    
            <?php else : ?>        
                <div class="row">
                    <div class="col">
                        <div class=" text-center" type="submit">
                            <button type="submit" class="btn btn-primary text-center" style="width:100%">DAFTAR SEBAGAI SISWA BARU</button>
                        </div>
                    </div>
                </div> 
            <?php endif ?>         
    </form>
    

</div>
<?= $this->endSection(); ?>