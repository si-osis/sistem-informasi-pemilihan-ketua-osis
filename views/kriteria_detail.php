<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Kriteria</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail kriteria-->
                    <?php
                    $sql = "SELECT *FROM tbl_kriteria WHERE id ='" . $_GET ['id'] . "'";
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
                            <td>Kepemimpinan</td> <td><?= $data['kepemimpinan'] ?></td>
                        </tr>
                        <tr>
                            <td>Pengetahuan Skill</td> <td><?= $data['pengetahuan_skill'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggung Jawab</td> <td><?= $data['tanggung_jawab'] ?></td>
                        </tr>
                        <tr>
                            <td>Kedisiplinan</td> <td><?= $data['kedisiplinan'] ?></td>
                        </tr>
                        <tr>
                            <td>Status</td> <td><?= $data['status'] ?></td>
                        </tr>
						<tr>
                            <td>Total</td> <td><?= $data['total'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=kriteria&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data kriteria </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

