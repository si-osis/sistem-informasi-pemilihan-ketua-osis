<?php
$nope=$_GET['nope'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_kriteria WHERE nama_calon ='$namacalon'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Pengumuman</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_calon" class="col-sm-3 control-label">Nama Calon</label>
                            <div class="col-sm-9">
								<input type="text" name="nama_calon" value="<?=$data['nama_calon']?>" class="form-control" id="inputEmail3" placeholder="Nama Calon" readonly="true">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelas" class="form-control" id="inputEmail3" placeholder="Nama Kelas">
                            </div>
                        </div>

						<div class="form-group">
                            <label for="nilai" class="col-sm-3 control-label">Nilai</label>
                            <div class="col-sm-3">
                                <input type="date" name="nilai" class="form-control" id="inputEmail3" placeholder="Nilai">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Pengumuman</button>
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
	$kelas=$_POST['kelas'];
	$nilai=$_POST['nilai'];
    //buat sql
    $sql="INSERT INTO pengumuman VALUES ('$nama_calon','$kelas','$nilai','')";
	$sqlKriteria="UPDATE kriteria SET status='nama_calon' WHERE nilai='$namacalon'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Pengumuman Error");
	$queryKriteria=  mysqli_query($koneksi, $sqlKriteria) or die ("SQL Simpan Kriteria Error");
    if ($query){
        echo "<script>window.location.assign('?page=pengumuman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
