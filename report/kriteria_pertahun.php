<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Kriteria Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail tbl_kriteria-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pemilihan Ketua Osis SMA XYZ </h2>
                        <h4>Jalan Jendral ABahagia No.99 <br>Kecamatan Sengsara, Kabupaten XYZ</h4>
                        <hr>
                        <hr>
                        <h3>DATA KRITERIA TAHUN   <? echo "$ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
									<th>No.</th><th width="18%">Nama Calon</th><th>Kepemimpinan</th><th width="14%"><center>Pengetahuan dan Skill</center></th><th width="15%"><center>Tanggung Jawab</center></th><th width="10%">Kedisiplinan</th><th><center>Total</center></th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_kriteria WHERE substr(tgl_masuk,1,4)='$ambilthn'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									                  <td><?= $data['nama_calon'] ?></td>
                                    <td><?= $data['kepemimpinan'] ?></td>
                                    <td><?= $data['pengetahuan_skill'] ?></td>
                                    <td><?= $data['tanggung_jawab'] ?></td>
									                  <td><?= $data['kedisiplinan'] ?></td>
									                  <td><?= $data['total'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Kisaran,  &nbsp <?= date("d-m-Y") ?>
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
