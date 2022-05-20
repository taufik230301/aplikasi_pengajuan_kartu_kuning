<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/components/header.php") ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url();?>assets/admin_lte/dist/img/Loading.png"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view("admin/components/navbar.php") ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php $this->load->view("admin/components/sidebar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Loker</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Loker</li>
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
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">DataTable with default features</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Nama Perusahaan</th>
                                                <th>Jenis Perusahaan</th>
                                                <th>NPWP Perusahaan</th>
                                                <th>Provinsi</th>
                                                <th>Kota</th>
                                                <th>Alamat</th>
                                                <th>Kode Pos</th>
                                                <th>Deskripsi</th>
                                                <th>Nomor Telepon</th>
                                                <th>Tanggal Daftar</th>
                                                <th>Logo Perusahaan</th>
                                                <th>Status Verifikasi</th>
                                                <th>Status Aktif</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
                                            $id = 0;
                                            foreach($perusahaan as $i)
                                            :
                                            $id++;
                                            $username = $i['username'];
                                            $email = $i['email'];
                                            $nama_perusahaan = $i['nama_perusahaan'];
                                            $jenis_perusahaan = $i['jenis_perusahaan'];
                                            $npwp_perusahaan = $i['npwp_perusahaan'];
                                            $provinsi = $i['provinsi'];
                                            $kota = $i['kota'];
                                            $alamat = $i['alamat'];
                                            $kode_pos = $i['kode_pos'];
                                            $deskripsi = $i['deskripsi'];
                                            $nomor_telepon = $i['nomor_telepon'];
                                            $date_registered = $i['date_registered'];
                                            $logo = $i['logo'];
                                            $id_status_verifikasi = $i['id_status_verifikasi'];
                                            $id_status_aktif = $i['id_status_aktif'];
                                            
                                            

                                            ?>
                                            <tr>
                                                <td><?=$id?></td>
                                                <td><?=$username?></td>
                                                <td><?=$email?> </td>
                                                <td><?=$nama_perusahaan?></td>
                                                <td><?=$jenis_perusahaan?></td>
                                                <td><?=$npwp_perusahaan?></td>
                                                <td><?=$provinsi?></td>
                                                <td><?=$kota?></td>
                                                <td><?=$alamat?></td>
                                                <td><?=$kode_pos?></td>
                                                <td><?=$deskripsi?></td>
                                                <td><?=$nomor_telepon?></td>
                                                <td><?=$date_registered?></td>
                                                <td><?=$logo?></td>
                                                <td><?php if($id_status_verifikasi == 1){ ?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-info" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Belum Diverifikasi
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }elseif($id_status_verifikasi == 2) {?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-info" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Sudah Diverifikasi
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                </td>
                                                <td><?php if($id_status_aktif == 1){ ?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-info" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Belum Aktif
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }elseif($id_status_aktif == 2) {?>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-info" data-toggle="modal"
                                                                data-target="#edit_data_pegawai">
                                                                Selesai Aktif
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->

                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view("admin/components/js.php") ?>
</body>

</html>