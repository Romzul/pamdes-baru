<main class="app-content">
        <div class="row mb-2">
            <div class="col-md-12">
                <h4>Cari Data Pelanggan</h4>
            </div>
            <div class="col-md-8">

                <div class="input-group mb-3">
                    <input type="text" class="form-control"
                        placeholder="Temukan nomor pelanggan, nama, atau status pelanggan.."
                        aria-label="Temukan nomor pelanggan, nama, atau status pelanggan..n"
                        aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-suci pl-3 pr-3" type="button" id="button-addon2">Cari
                            Data</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="<?= base_url('Tambah_data_pelanggan'); ?>" class="btn btn-suci"><i class="fa fa-plus"></i> Tambah Data</a>
                <div class="btn-group">
                    <button type="button" class="btn btn-suci dropdown-toggle" data-toggle="dropdown"
                        aria-expanded="false">
                        Status
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item green" href="#"><b>Sudah Bayar</b></a>
                        <a class="dropdown-item red" href="#"><b>Belum Bayar</b></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4>Rincian Data Pelanggan</h4>
            </div>
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="table-responsive tb-point">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>Nomor Pelanggan</th>
                                        <th>Nama Pelanggan</th>
										<th>Kategori</th>
                                        <th>Tunggakan</th>
                                        <th>Nominal Pembayaran</th>
                                        <th>Status</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php
									
									foreach ($pelanggan->result_array() as $a):
										$id_pelanggan=$a['id_pelanggan'];
										$nama_pelanggan=$a['nama_pelanggan'];
										// $tunggakan=$a['tunggakan'];
										$kategori=$a['kategori'];
										// $total_tagihan=$a['total_tagihan'];
										// $status=$a['status'];
								?>
                                    <tr>
                                        <td><?php echo $id_pelanggan;?></td>
                                        <td><?php echo $nama_pelanggan;?></td>
										<td><?php if($kategori == 'std'){
												echo 'Standar';}
											elseif($kategori =='kms'){
												echo 'Keluarga Miskin';}
											elseif($kategori =='ins'){
												echo 'Dinas / Instansi';}
											elseif($kategori == 'msj'){
												echo 'Mushola / Masjid';}?></td>
                                        <td></td>
                                        <td></td>
                                        <td class="green">Sudah Bayar</td>
										<td><center>
											<a href="#demo-modal" type="button"><i class="fas fa-edit"></i></a>
											|
											<a href=""><i class="fas fa-trash-alt" style="color: red"></i></a></center>
										</td>
                                    </tr>
									<?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<!-- modal -->
        <div id="demo-modal" class="modal">
            <div class="modal__content">
                <div class="d-flex">
                    <img src="<?= base_url('assets/'); ?>images/logo.png" width="30%" class="img-responsive mr-auto">
                </div>

                <div class="mt-5">
                    <form>
					<div class="form-group tb-point">
                                <label for="exampleInputEmail1"><b>Nama Lengkap</b></label>
                                <input type="text" name="nama_pelanggan" placeholder="Tulis nama lengkap pelanggan" class="form-control"
                                    id="nama_pelanggan" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group tb-point">
                                <label for="exampleInputEmail1"><b>Jenis Kelamin</b></label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" name="j_kelamin id="j_kelamin">
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="L">Laki- Laki</option>
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
                                <input type="text" name="kecamtan" placeholder="Tulis kecamatan tempat tinggal pelanggan" class="form-control"
                                    id="kecamatan" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group tb-point">
                                <label for="exampleInputEmail1"><b>RT</b></label>
                                <input type="email" name="rt" placeholder="Tulis RT tempat tinggal pelanggan"
                                    class="form-control" id="rt" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group tb-point">
                                <label for="exampleInputEmail1"><b>RW</b></label>
                                <input type="email" name="rw" placeholder="Tulis RW tempat tinggal pelanggan"
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
                                <input type="email" name="meter_pertama" placeholder="Tulis RW tempat tinggal pelanggan"
                                    class="form-control" id="meter_pertama" aria-describedby="emailHelp">
                            </div>
							<div class="form-group tb-point">
                                <label for="exampleInputEmail1"><b>Pilih Tanggal</b></label>
                                <input type="text" name="tggl_pemasangan" class="form-control" id='datepicker' placeholder='Pilih Tanggal'
                                    style='width: 100%;'>
                            </div>
                    </form>
                </div>
                <a href="#" class="modal__close">&times;</a>
            </div>
        </div>
        <!-- end Modal -->
    </main>
