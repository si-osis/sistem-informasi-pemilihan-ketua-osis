<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data kriteria</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_calon" class="col-sm-3 control-label">Nama Calon</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_calon" class="form-control" id="inputPassword3" placeholder="Inputkan Nama Calon Siswa">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kepemimpinan" class="col-sm-3 control-label">kepemimpinan</label>
                               <div class="col-sm-2 col-xs-9">
                                <input type="text" name="kepemimpinan" class="form-control" id="inputEmail3" placeholder="Inputkan Nilai Kepemimpinan" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="pengetahuan_skill" class="col-sm-3 control-label">pengetahuan_skill</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengetahuan_skill" class="form-control" id="inputEmail3" placeholder="Inputkan Nilai Pengetahuan Skill" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="tanggung_jawab" class="col-sm-3 control-label">tanggung_jawab</label>
                            <div class="col-sm-9">
                                <input type="text" name="tanggung_jawab" class="form-control" id="inputEmail3" placeholder="Inputkan Nilai Tanggung Jawab" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="kedisiplinan" class="col-sm-3 control-label">kedisiplinan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kedisiplinan" class="form-control" id="inputEmail3" placeholder="Inputkan Nilai Kedisiplinan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">status</label>
                            <div class="col-sm-9">
                                <input type="text" name="status" class="form-control" id="inputEmail3" placeholder="Inputkan Status" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="total" class="col-sm-3 control-label">total</label>
                            <div class="col-sm-9">
                                <input type="text" name="total" class="form-control" id="inputEmail3" placeholder="Inputkan Jumlah Nilai Keseluruhan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=kriteria&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Kriteria
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nama_calon=$_POST['nama_calon'];
    $kepemimpinan=$_POST['kepemimpinan'];
	$pengetahuan_skill=$_POST['pengetahuan_skill'];
	$tanggung_jawab=$_POST['tanggung_jawab'];
	$kedisiplinan=$_POST['kedisiplinan'];
	$status=$_POST['status'];
    $total=$_POST['total'];
  
    //buat sql
    $sql="INSERT INTO tbl_kriteria VALUES ('','$nama_calon','$kepemimpinan','$pengetahuan_skill','$tanggung_jawab','$kedisiplinan','$status','$total')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Kriteria Error");
    if ($query){
        echo "<script>window.location.assign('?page=kriteria&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
