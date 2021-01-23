<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Roti</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_daftar WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Kode Roti</td> <td><?= $data['kode_roti'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Roti</td> <td><?= $data['nama_roti'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Roti</td> <td><?= $data['jenis_roti'] ?></td>
                        </tr>
						<tr>
                            <td>Harga</td> <td><?= $data['harga'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=daftar&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Roti </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

