<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Kriteria</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_kriteria WHERE id='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pemilihan Ketua Osis SMA XYZ </h2>
                        <h4>Jalan Bahagia No.99 <br>Kecamatan Sengsara, Kabupaten XYZ</h4>
                        <hr>
                        <hr>
                        <h3>DATA KRITERIA</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nama Calon</td> <td><?= $data['nama_calon'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200">Kepemimpinan</td> <td><?= $data['kepemimpinan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Pengetahuan Skill</td> <td><strong><?= $data['pengetahuan_skill'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggung Jawab</td> <td><?= $data['tanggung_jawab'] ?></td>
                                </tr>
								<tr>
                                    <td>Kedisiplinan</td> <td><?= $data['kedisiplinan'] ?></td>
                                </tr>
								<tr>
                                    <td>Total</td> <td><?= $data['total'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kabag Admin, S.Pd<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>