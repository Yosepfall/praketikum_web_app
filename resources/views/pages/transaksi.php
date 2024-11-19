@extends('tampilan.kontent');
     <!-- Main Content -->
        <div class="container-fluid" style="margin-left: 250px; width:900px;">
            <h1 class="mt-4">Transaksi</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="width: 101rem;">
                        <div class="card-header">
                            <h3>TRANSAKSI PEMBAYARAN</h3>
                        </div>
                        <div class="card-body">
                            <form action="proses_transaksi.php" method="post" style="height: 50vh;">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">ID Petugas</span>
                                    </div>
                                    <input type="text" name="id_petugas" class="form-control" placeholder="ID Petugas" aria-label="masukkan id petugas" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">NISN</span>
                                    </div>
                                    <input type="text" name="nisn" class="form-control" placeholder="NISN" aria-label="masukkan nisn" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Tanggal Bayar</span>
                                    </div>
                                    <input type="date" name="tgl_bayar" class="form-control" aria-label="tanggal" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Bulan Bayar</label>
                                    </div>
                                    <select class="custom-select" name="bulan_dibayar" id="inputGroupSelect01">
                                        <option selected>--pilih bulan--</option>
                                        <option value="januari">Januari</option>
                                        <option value="februari">Februari</option>
                                        <option value="maret">Maret</option>
                                        <option value="april">April</option>
                                        <option value="mei">Mei</option>
                                        <option value="juni">Juni</option>
                                        <option value="juli">Juli</option>
                                        <option value="agustus">Agustus</option>
                                        <option value="september">September</option>
                                        <option value="oktober">Oktober</option>
                                        <option value="november">November</option>
                                        <option value="desember">Desember</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Tahun Bayar</label>
                                    </div>
                                    <select class="custom-select" name="tahun_dibayar" id="inputGroupSelect01">
                                        <option selected>--pilih tahun--</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">ID SPP</span>
                                    </div>
                                    <input type="text" name="id_spp" class="form-control" placeholder="ID SPP" aria-label="masukkan id spp" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">Jumlah</span>
                                    </div>
                                    <input type="text" name="jumlah_bayar" class="form-control" placeholder="Jumlah Bayar" aria-label="masukkan jumlah" aria-describedby="basic-addon1">
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success">Bayar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
@extends('tampilan.footer')
</html>