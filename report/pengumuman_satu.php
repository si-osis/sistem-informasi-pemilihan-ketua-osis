<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Pengumuman Kriteria</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM pengumuman WHERE id='" . $_GET ['id'] . "'";
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
                        <h4>Jalan Jendral Ahmad Yani No. 33, Sei Renggas, Kisaran, Sendang Sari <br> Kisaran Barat, Kabupaten Asahan, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA PENGUMUMAN KRITERIA</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>Nama Calon</td> <td><?= $data['nama_calon'] ?></td>
                                </tr>
                                <tr>
                                    <td>Kelas</td> <td><?= $data['kelas'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nilai</td> <td><?= $data['nilai'] ?></td>
                                </tr>
                                <tr>
                                    <td>Hasil Persentasi</td> <td><?= $data['hasil_persentasi'] ?></td>
                                </tr>
								<tr>
                                    <td>Kategori</td> <td><?= $data['kategori'] ?> hari</td>
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
