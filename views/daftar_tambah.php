<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Roti</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="kode_roti" class="col-sm-3 control-label">Kode Roti</label>
                            <div class="col-sm-9">
                                <input type="text" name="kode_roti" class="form-control" id="inputEmail3" placeholder="Inputkan Kode Roti" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama_roti" class="col-sm-3 control-label">Nama Roti</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_roti" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Roti" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jenis_roti" class="col-sm-3 control-label">Jenis Roti</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_roti" class="form-control" id="inputEmail3" placeholder="Inputkan Jenis Roti" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="harga" class="col-sm-3 control-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="text" name="harga" class="form-control" id="inputEmail3" placeholder="Inputkan Harga Roti" required>
                            </div>
                        </div>
                        <!--Akhir Status-->

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=daftar&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
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
    $sql="INSERT INTO tbl_daftar VALUES ('','$kode_roti','$nama_roti','$jenis_roti','$harga')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Daftar Error");
    if ($query){
        echo "<script>window.location.assign('?page=daftar&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
