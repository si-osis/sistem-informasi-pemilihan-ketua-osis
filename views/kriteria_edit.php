<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_kriteria WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Kriteria</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_calon" class="col-sm-3 control-label">Nama Calon</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_calon" value="<?=$data['nama_calon']?>"class="form-control" id="inputEmail3" placeholder="Nama Calon">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kepemimpinan" class="col-sm-3 control-label">Kepemimpinan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kepemimpinan" value="<?=$data['kepemimpinan']?>"class="form-control" id="inputEmail3" placeholder="kepemimpinan">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="pengetahuan_skill" class="col-sm-3 control-label">Pengetahuan Skill</label>
                            <div class="col-sm-9">
                                <input type="text" name="pengetahuan_skill" value="<?=$data['pengetahuan_skill']?>"class="form-control" id="inputEmail3" placeholder="Pengetahuan Skill">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tanggung_jawab" class="col-sm-3 control-label">NTanggung Jawab</label>
                            <div class="col-sm-9">
                                <input type="text" name="tanggung_jawab" value="<?=$data['tanggung_jawab']?>"class="form-control" id="inputEmail3" placeholder="Tanggung Jawab">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="kedisiplinan" class="col-sm-3 control-label">Kedisiplinan</label>
                            <div class="col-sm-9">
                                <input type="text" name="kedisiplinan" value="<?=$data['kedisiplinan']?>"class="form-control" id="inputEmail3" placeholder="Kedisiplinan">
                            </div>
                        </div>
							<div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9">
                                <input type="text" name="status" value="<?=$data['status']?>"class="form-control" id="inputEmail3" placeholder="Status" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="total" class="col-sm-3 control-label">Total</label>
                            <div class="col-sm-9">
                                <input type="text" name="total" value="<?=$data['total']?>"class="form-control" id="inputEmail3" placeholder="Total" >
                            </div>
                        </div>
                        
                        
                        <!--Akhir Status-->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Kriteria</button>
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
    $sql="UPDATE kriteria SET nama_calon='$nama_calon',kepemimpinan='$kepemimpinan',pengetahuan_skill='$pengetahuan_skill',tanggung_jawab='$tanggung_jawab',kedisiplinan='$kedisiplinan',
	status='$status',total='$total' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=kriteria&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



