<div class="container">
    <?php if($this->session->flashdata('flash')): ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success" role="alert">
                Data mahasiswa<strong> berhasil</strong> <?= $this->session->flashdata('flash'); ?>. 
            </div>
        </div>    
    </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> -->
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary" >
                Tambah Data Mahasiswa
            </a>
<!--
         Modal 
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Mahasiswa</h5>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                    </div>   
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" name="nim" class="form-control" id="nim">
                    </div>   
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Pilih Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <option>Pilih Jurusan (Harap Pilih)</option>
                            <option>Teknik Informatika</option>
                            <option>Teknik Indurstri</option>
                            <option>Teknik ELektronika</option>
                        </select>
                    </div>
                </form> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" name="tambah">Tambah</button>
            </div>
            </div>
        </div>
        </div>
-->
    <div class="row mt-3">
        <div class="col-md-6">
            <h1>Data Mahasiswa</h1>
            <ul class="list-group">
                <?php foreach($mahasiswa as $mhs): ?>
                    <li class="list-group-item"><?php echo $mhs['nama']; ?>
                        <a class="badge bg-danger float-right" href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?> " onclick="return confirm('Anda Yakin?') ">Hapus</a>
                    </li>
                    
                <?php endforeach; ?>
        </div>
    </div>
</div>