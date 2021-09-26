<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h4  text-gray-800">Selamat Datang</h1>
    <h1 class="h3 f-bold mb-4 text-gray-800"><?= user()->username ?> !</h1>
    <form action="/user/tambahData" method="POST"> 
        <?= csrf_field(); ?>
        <div class="row">
            
            <div class="col-md-6 col-sm-12">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url(); ?>/img/<?= user()->user_image ?>" class="img-fluid rounded-start" alt="Foto">

                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Biodata</h5>
                                    
                                <?php if((user()->fullname) != null) : ?>   
                                    <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
                                    <p class="form-control  form-control-sm"><?= user()->fullname ?></p>
                                    
                                    <label for="formGroupExampleInput" class="form-label">Jenis Kelamin</label>
                                    <p class="form-control  form-control-sm"><?= $biodata[0]['jenis_kelamin'] ?></p>

                                    <label for="formGroupExampleInput" class="form-label">Tempat Lahir</label>
                                    <p class="form-control  form-control-sm"><?= $biodata[0]['tempat_lahir'] ?></p>

                                    <label for="formGroupExampleInput" class="form-label">Tanggal Lahir</label>
                                    <p class="form-control  form-control-sm"><?= $biodata[0]['tanggal_lahir'] ?></p>

                                <?php else : ?>
                                    <label for="formGroupExampleInput" class="form-label mb">Nama Lengkap</label>
                                    <input type="text" class="form-control mb-3 <?= ($validation->hasError('fullname')) ? 'is-invalid' :  ''; ?>" autofocus value="<?= old('fullname'); ?>" name="fullname"  id="fullname" placeholder="Belum Diisi">
                                    
                                    <label for="formGroupExampleInput" class="form-label">Jenis Kelamin</label>
                                    <input type="text" class="form-control mb-3 <?= ($validation->hasError('jenis_kelamin')) ? 'is-invalid' :  ''; ?>" autofocus value="<?= old('jenis_kelamin'); ?>" name="jenis_kelamin" id="jenis_kelamin" placeholder="Belum Diisi">

                                    <label for="formGroupExampleInput" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control mb-3 <?= ($validation->hasError('tempat_lahir')) ? 'is-invalid' :  ''; ?>" autofocus value="<?= old('tempat_lahir'); ?>" name="tempat_lahir" id="tempat_lahir" placeholder="Belum Diisi">

                                    <label for="formGroupExampleInput" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control mb-3 <?= ($validation->hasError('tanggal_lahir')) ? 'is-invalid' :  ''; ?>" autofocus value="<?= old('tanggal_lahir'); ?>" name="tanggal_lahir" id="tanggal_lahir" placeholder="Belum Diisi">
                                    
                                <?php endif ?>
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
                                <?php if((user()->fullname) != null) : ?>

                                        <label for="formGroupExampleInput" class="form-label">Nama Ayah</label>
                                        <p class="form-control  form-control-sm"><?= user()->father_name ?></p>
                                        
                                        <label for="formGroupExampleInput" class="form-label">Nama Ibu</label>
                                        <p class="form-control  form-control-sm"><?= user()->mother_name ?></p>

                                        <label for="formGroupExampleInput" class="form-label">Alamat</label>
                                        <p class="form-control  form-control-sm"><?= user()->adress ?></p>

                                        <label for="formGroupExampleInput" class="form-label">No Hp</label>
                                        <p class="form-control  form-control-sm"><?= user()->phone_number ?></p>

                                    <?php else : ?>
                                        <label for="formGroupExampleInput" class="form-label">Nama Ayah</label>
                                        <input type="text" class="form-control mb-3 <?= ($validation->hasError('father_name')) ? 'is-invalid' :  ''; ?>" autofocus value="<?= old('father_name'); ?>" name="father_name" placeholder="Belum Diisi">
                                        
                                        <label for="formGroupExampleInput" class="form-label">Nama Ibu</label>
                                        <input type="text" class="form-control mb-3 <?= ($validation->hasError('mother_name')) ? 'is-invalid' :  ''; ?>" autofocus value="<?= old('mother_name'); ?>" name="mother_name" placeholder="Belum Diisi">

                                        <label for="formGroupExampleInput" class="form-label">Alamat</label>
                                        <input type="text" class="form-control mb-3 <?= ($validation->hasError('adress')) ? 'is-invalid' :  ''; ?>" autofocus value="<?= old('adress'); ?>" name="adress" placeholder="Belum Diisi">

                                        
                                        
                                    <?php endif ?>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col ">
                            <div class="card-body">
                                <h5 class="card-title">Berkas Pendukung</h5>
                                <?php if((user()->fullname) != null) : ?>

                                        <label for="formGroupExampleInput" class="form-label">Kartu Keluarga</label>
                                        <p class="form-control  form-control-sm"><?= user()->kk ?></p>
                                        
                                        <label for="formGroupExampleInput" class="form-label">Akta Kelahiran</label>
                                        <p class="form-control  form-control-sm"><?= user()->akta ?></p>

                                    <?php else : ?>
                                        <label for="formGroupExampleInput" class="form-label">No Hp</label>
                                        <input type="text" class="form-control mb-3 <?= ($validation->hasError('phone_number')) ? 'is-invalid' :  ''; ?>" autofocus value="<?= old('phone_number'); ?>" name="phone_number" placeholder="Belum Diisi">
                                        <label for="formGroupExampleInput" class="form-label ">Foto Anak</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input <?= ($validation->hasError('user_image')) ? 'is-invalid' :  ''; ?>" id="user_image" name="user_image">
                                            <label class="custom-file-label" for="user_image">Pilih Foto Anak</label>
                                        </div>
                                        
                                        <label for="formGroupExampleInput" class="form-label mt-3">Kartu Keluarga</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input <?= ($validation->hasError('kk')) ? 'is-invalid' :  ''; ?>" id="kk" name="kk">
                                            <label class="custom-file-label" for="kk">Pilih Berkas</label>
                                        </div>

                                        <label for="formGroupExampleInput" class="form-label mt-3">Akta Kelahiran</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input <?= ($validation->hasError('akta')) ? 'is-invalid' :  ''; ?>" id="akta" name="akta">
                                            <label class="custom-file-label" for="akta">Pilih Berkas</label>
                                        </div>
                                    <?php endif ?>
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