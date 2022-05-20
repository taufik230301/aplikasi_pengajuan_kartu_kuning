<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("user/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Berhasil Terdaftar!",
        text: "Silahkan Anda Login!",
        icon: "success"
    });
    </script>
    <?php } ?>
    <?php if ($this->session->flashdata('eror')){ ?>
    <script>
    swal({
        title: "Eror!",
        text: "Terjadi Kesalahan Dalam Proses data!",
        icon: "error"
    });
    </script>
    <?php } ?>
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url();?>assets/admin_lte/dist/img/Loading.png"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view("user/components/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("user/components/sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Form Daftar</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Daftar Kartu Kuning</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="col">
                        <?php
                                            $id = 0;
                                            foreach($user as $i)
                                            :
                                            $id++;
                                            $id_user = $i['id_user'];
                                            $nik = $i['nik']; 
                                            $nama_lengkap = $i['nama_lengkap']; 
                                            $tempat_lahir = $i['tempat_lahir']; 
                                            $tanggal_lahir = $i['tanggal_lahir']; 
                                            $agama = $i['agama']; 
                                            $tinggi_badan = $i['tinggi_badan'];
                                            $berat_badan = $i['berat_badan']; 
                                            $jurusan = $i['jurusan'];
                                            $pengalaman_kerja = $i['pengalaman_kerja'];
                                            $no_hp = $i['no_hp'];
                                            $provinsi = $i['provinsi'];
                                            $kota = $i['kota'];
                                            $kode_pos = $i['kode_pos'];
                                            $alamat = $i['alamat'];
                                            $foto_saya = $i['foto_saya'];
                                            $foto_ktp = $i['foto_ktp'];
                                            $foto_ijazah = $i['foto_ijazah'];
                                            $id_status_aktif = $i['id_status_aktif'];
                                            $id_status_perpanjangan = $i['id_status_perpanjangan'];
                                            

                                            ?>
                        <form action="<?=base_url();?>Daftar/lengkapi_data_user" enctype="multipart/form-data"
                            method="POST">
                            <input type="text" value="<?=$this->session->userdata('id_user')?>" name="id_user" hidden>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" aria-describedby="emailHelp"
                                    value="<?=$nik?>" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                    value="<?=$nama_lengkap?>" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                    value="<?=$tempat_lahir?>" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                    value="<?=$tanggal_lahir?>" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="jenis_kelamin" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <input type="text" class="form-control" id="agama" name="agama" value="<?=$agama?>" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                            </div>
                            <div class="form-group">
                                <label for="status_perkawinan">Status Perkawinan</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="status_perkawinan" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                                    <option value="Kawin">Kawin</option>
                                    <option value="Belum Kawin">Belum Kawin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tinggi_badan">Tinggi Badan</label>
                                <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan"
                                    value="<?=$tinggi_badan?>" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                            </div>
                            <div class="form-group">
                                <label for="berat_bedan">Berat Badan</label>
                                <input type="text" class="form-control" id="berat_badan" name="berat_badan"
                                    value="<?=$berat_badan?>" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                            </div>
                            <div class="form-group">
                                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                <select class="form-control" id="pendidikan_terakhir" name="pendidikan_terakhir" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan"
                                    value="<?=$jurusan?>" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                            </div>
                            <div class="form-group">
                                <label for="pengalaman_kerja">Pengalaman Kerja</label>
                                <textarea class="form-control" id="pengalaman_kerja" name="pengalaman_kerja" rows="3" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>><?=$pengalaman_kerja?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No NP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?=$no_hp?>" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                            </div>
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi" name="provinsi"
                                    value="<?=$provinsi?>" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                            </div>
                            <div class="form-group">
                                <label for="kota">Kota</label>
                                <input type="text" class="form-control" id="kota" name="kota" value="<?=$kota?>" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                            </div>
                            <div class="form-group">
                                <label for="kode_pos">Kode Pos</label>
                                <input type="text" class="form-control" id="kode_pos" name="kode_pos"
                                    value="<?=$kode_pos?>" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>><?=$alamat?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="foto_saya">Foto</label>
                                <input type="file" class="form-control" id="foto_saya" name="foto_saya" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                                <input type="text" class="form-control" id="foto_saya" name="foto_saya_old"
                                    value="<?=$foto_saya?>" hidden>
                            </div>
                            <div class="form-group">
                                <label for="foto_ktp">Foto KTP</label>
                                <input type="file" class="form-control" id="foto_ktp" name="foto_ktp" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                                <input type="text" class="form-control" id="foto_ktp" name="foto_ktp_old"
                                    value="<?=$foto_ktp?>" hidden>
                            </div>
                            <div class="form-group">
                                <label for="foto_ijazah">Foto Ijazah</label>
                                <input type="file" class="form-control" id="foto_ijazah" name="foto_ijazah" <?php  if($id_status_aktif == '2' OR $id_status_perpanjangan == '2'){
                                        echo 'disabled';
                                    }else{
                                        echo '';
                                    }  ?>>
                                <input type="text" class="form-control" id="foto_ijazah" name="foto_ijazah_old"
                                    value="<?=$foto_ijazah?>" hidden>
                            </div>
                            <button type="submit" class="btn btn-primary mb-3">Submit</button>
                        </form>
                        <?php endforeach;?>
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->

                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view("user/components/js.php") ?>
</body>

</html>