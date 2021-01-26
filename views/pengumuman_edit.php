<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Pengumuman</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama_calon" class="col-sm-3 control-label">Nama Calon</label>
                             <div class="col-sm-9">
								<input type="text" name="nope" value="<?=$data['nama_calon']?>"class="form-control" id="inputEmail3" placeholder="nama_calon" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelas" value="<?=$data['kelas']?>"class="form-control" id="inputEmail3" placeholder="kelas">
                            </div>
                        </div>
						
						
                            
                        <div class="form-group">
                            <label for="nilai" class="col-sm-3 control-label">Nilai</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['nilai']?>" class="form-control" id="inputPassword3" placeholder="nilai">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Penguumuman</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pengumuman&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Pengumuman
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nope=$_POST['nope'];
	$peminjam=$_POST['peminjam'];
	$tglPinjam=$_POST['tahun']."-".$_POST['bulan']."-".$_POST['tanggal'];
	$tglKembali=$_POST['tahun_kem']."-".$_POST['bulan_kem']."-".$_POST['tanggal_kem'];
		$thnKem =$_POST['tahun_kem'];
		$thnpin =$_POST['tahun'];
		$blnKem =$_POST['bulan_kem'];
		$blnpin =$_POST['bulan'];
		$tglKem =$_POST['tanggal_kem'];
		$tglpin =$_POST['tanggal'];
	$lamapinjam= (($thnKem - $thnpin)*365)+(($blnKem - $blnpin)*30)+($tglKem - $tglpin);
    $ket=$_POST['ket'];
    //buat sql
    $sql="UPDATE pengumuman SET nama_calon = '$namacalon', kelas='$kelas', nilai='$nilai', hasil_persentasi='$hasilpersentasi', kategori='$kategori' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pengumuman&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



