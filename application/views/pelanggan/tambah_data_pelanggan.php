<main class="app-content">
        <div class="row mb-2">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url('Tambah_data_pelanggan/tambah_pelanggan');?>" method="POST">
                            <div class="form-group tb-point">
                                <label for="exampleInputEmail1"><b>Nama Lengkap</b></label>
                                <input type="text" name="nama_pelanggan" placeholder="Tulis nama lengkap pelanggan" class="form-control"
                                    id="nama_pelanggan" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group tb-point">
                                <label for="exampleInputEmail1"><b>Jenis Kelamin</b></label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" name="j_kelamin" id="j_kelamin">
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group tb-point">
                                <label for="exampleInputEmail1"><b>Desa</b></label>
                                <input type="text" name="desa" placeholder="Tulis desa tempat tinggal pelanggan" class="form-control"
                                    id="desa" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group tb-point">
                                <label for="exampleInputEmail1"><b>Kecamatan</b></label>
                                <input type="text" name="kecamatan" placeholder="Tulis kecamatan tempat tinggal pelanggan" class="form-control"
                                    id="kecamatan" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group tb-point">
                                <label for="exampleInputEmail1"><b>RT</b></label>
                                <input type="text" name="rt" placeholder="Tulis RT tempat tinggal pelanggan"
                                    class="form-control" id="rt" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group tb-point">
                                <label for="exampleInputEmail1"><b>RW</b></label>
                                <input type="text" name="rw" placeholder="Tulis RW tempat tinggal pelanggan"
                                    class="form-control" id="rw" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group tb-point">
                                <label for="exampleInputEmail1"><b>Kategori</b></label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" name="kategori" id="kategori">
                                        <option selected>Pilih Kategori</option>
                                        <option value="std">Standar</option>
                                        <option value="kms">Keluarga Miskin</option>
                                        <option value="ins">Dinas/Instansi</option>
                                        <option value="msj">Mushola/Masjid</option>
                                    </select>
                                </div>
                            </div>
							<div class="form-group tb-point">
                                <label for="exampleInputEmail1"><b>Meter Pertama</b></label>
                                <input type="text" name="meter_pertama" placeholder="Tulis RW tempat tinggal pelanggan"
                                    class="form-control" id="meter_pertama" aria-describedby="emailHelp">
                            </div>
							<div class="form-group tb-point">
                                <label for="exampleInputEmail1"><b>Pilih Tanggal</b></label>
                                <input type="date" name="tggl_pemasangan" class="form-control" id='tggl_pemasangan' placeholder='Pilih Tanggal'
                                    style='width: 100%;'>
                            </div>
                            <div class="d-flex mt-5">
                            <div class="ml-auto">
                                <button type="button" class="btn btn-outline-danger mr-1"><b>Kembali</b></button>
                                <button type="submit" class="btn btn-outline-info ml-1">Tambah Data</button>
                            </div>
							</div>
						</form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

