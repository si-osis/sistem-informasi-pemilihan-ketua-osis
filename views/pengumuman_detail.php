<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Perhitungan Kriteria</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pengumuman WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nama Calon</td> <td><?= $data['nama_calon'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Kelas</td> <td><?= $data['kelas'] ?></td>
                        </tr>
                        <tr>
                            <td>Nilai</td> <td><?= $data['nilai'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pengumuman&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pengumuman </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

