<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_daftar WHERE id ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Roti</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="kode_roti" class="col-sm-3 control-label">Kode Roti</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_roti" value="<?=$data['kode_roti']?>"class="form-control" id="inputEmail3" placeholder="Kode Roti">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama_roti" class="col-sm-3 control-label">Nama Roti</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_roti" value="<?=$data['nama_roti']?>"class="form-control" id="inputEmail3" placeholder="Nama Roti">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_roti" class="col-sm-3 control-label">Jenis Roti</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_roti" value="<?=$data['jenis_roti']?>"class="form-control" id="inputEmail3" placeholder="Jenis Roti">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" value="<?=$data['harga']?>"class="form-control" id="inputEmail3" placeholder="Harga">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Roti</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=daftar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Roti
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $kode_roti=$_POST['kode_roti'];
    $nama_roti=$_POST['nama_roti'];
	$jenis_roti=$_POST['jenis_roti'];
    $harga=$_POST['harga'];
    //buat sql
    $sql="UPDATE tbl_daftar SET kode_roti='$kode_roti',nama_roti='$nama_roti',jenis_roti='$jenis_roti',harga='$harga' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=daftar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



