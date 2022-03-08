<!-- modal -->
<div id="bayar-modal" class="modal">
    <div class="modal__content">

        <div class="modal-header">
            <h3 class="modal-title">Tambah Data Beban Meter</h3>
        </div>

        <div class="mt-1">

            <?= form_open_multipart('admin/pembayaran'); ?>
            <div class="input-group mb-3 mt-2">
                <input type="text" class="form-control" id="form_search" name="form_search"
                    placeholder="Masukkan nomor pelanggan" aria-label="Masukkan nomor pelanggan"
                    aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-suci pl-3 pr-3" type="submit" id="button-addon2">Cari
                        Data</button>
                </div>
            </div>
            <div class="form-group tb-point">
                <label for="exampleInputEmail1"><b>Id Pelanggan</b></label>
                <input readonly type="text" name="id_pelanggan" value="" class="form-control" id="id_pelanggan"
                    aria-describedby="emailHelp" readonly>
                <?= form_error('nama_pelanggan', '<small class="text-danger pl-3">,</small>'); ?>
            </div>
            <div class="form-group tb-point">
                <label for="exampleInputEmail1"><b>Nama Lengkap</b></label>
                <input type="text" name="nama_pelanggan" value="" class="form-control" id="nama_pelanggan"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group tb-point ml-auto">
                        <label><b>Bulan</b></label>
                        <div class="input-group mb-3">
                            <select class="custom-select" name="bulan" id="bulan">
                                <option selected>Pilih Bulan</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group tb-point ml-auto">
                        <label><b>Beban Meter</b></label>
                        <input type="number" class="form-control qty" value="0" id="beban" name="beban">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group tb-point ml-auto">
                        <label><b>Total Tagihan</b></label>
                        <input type="number" readonly value="0" name="total_tagihan" class="form-control"
                            id="total_tagihan">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group tb-point ml-auto">
                        <label><b>Tahun</b></label>
                        <input type="number" name="tahun" placeholder="Tulis tahun tunggakan" class="form-control"
                            id="tahun" aria-describedby="emailHelp">
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="ml-auto mt-4">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="#" class="btn btn-warning">Batal</a>
                </div>
            </div>



        </div>











        </form>
    </div>
</div>
</div>
<!-- end Modal -->