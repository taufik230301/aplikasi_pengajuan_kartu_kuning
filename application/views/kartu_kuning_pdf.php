<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu AK1</title>
</head>

<body>
    <table
        style="height: 92px; margin-left: auto; margin-right: auto; width: 203px; border: none; background-color: white; margin-top:-40px;">
        <tbody>
            <tr style="height: 113.575px;">
                <img style="margin-top:20px;   margin-right:-20px;" src="<?=base_url();?>assets/logo/logo.png" alt=""
                    height="95" />
                <td style="width: 580px; text-align: center; height: 113.575px; border: none;">
                    <h2 style="margin-bottom:-15px;">PEMERINTAH KABUPATEN OGAN ILIR</h2>
                    <h4 style="margin-bottom:-15px;">DINAS TENAGA KERJA DAN TRANSMIGRASI</h4>
                    <h4 style="margin-bottom:-15px;">Jl.Raya Lintas Timur Km. 35 Telp.(0711) 580 600</h4>
                    <h4 style="margin-bottom:-15px;">KARTU TANDA BUKTI PENDAFTARAN PENCARI KERJA</h4>
                </td>
            </tr>
        </tbody>
    </table>

    <table style="margin-left: auto;  margin-right: auto; height: 213px; width: 472.612px; margin-top:60px;">
        <tbody>

            <?php
                                            $id = 0;
                                            foreach($pegawai as $i)
                                            :
                                            $id++;
                                            $username = $i['username'];
                                            $email = $i['email'];
                                            $id_user = $i['id_user'];
                                            $nik = $i['nik']; 
                                            $no_pendaftaran = $i['no_pendaftaran']; 
                                            $nama_lengkap = $i['nama_lengkap']; 
                                            $tempat_lahir = $i['tempat_lahir']; 
                                            $tanggal_lahir = $i['tanggal_lahir']; 
                                            $jenis_kelamin = $i['jenis_kelamin']; 
                                            $agama = $i['agama']; 
                                            $status_perkawinan = $i['status_perkawinan']; 
                                            $tinggi_badan = $i['tinggi_badan'];
                                            $berat_badan = $i['berat_badan'];
                                            $pendidikan_terakhir = $i['pendidikan_terakhir']; 
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
                                            $date_registered = $i['date_registered'];
                                            $id_status_aktif = $i['id_status_aktif'];
                                            $id_status_perpanjangan = $i['id_status_perpanjangan'];
                                            $id_status_verifikasi = $i['id_status_verifikasi'];
                                            $mulai_berlaku = $i['mulai_berlaku'];
                                            $akhir_berlaku = $i['akhir_berlaku'];
                                            

                                            ?>
            <tr>
                <td style="width: 58px; vertical-align: top;">
                    <br>
                    <img src="<?=base_url();?>assets/berkas/<?=$foto_saya?>" alt="" width="100" /></td>
                <td style="text-align: center; width: 300px;">
                    <p style="text-align: left; margin-left: 30px; font-weight: bold;">No Pendaftaran</p>
                    <p style="text-align: left; margin-left: 30px; font-weight: bold;">No Induk Kependudukan</p>
                    <p style="text-align: left; margin-left: 30px; font-weight: bold;">Nama Lengkap</p>
                    <p style="text-align: left; margin-left: 30px; font-weight: bold;">Tempat tanggal Lahir</p>
                    <p style="text-align: left; margin-left: 30px; font-weight: bold;">Jenis Kelamin</p>
                    <p style="text-align: left; margin-left: 30px; font-weight: bold;">Status</p>
                    <p style="text-align: left; margin-left: 30px; font-weight: bold;">Agama</p>
                    <p style="text-align: left; margin-left: 30px; font-weight: bold;">Alamat Lengkap</p>
                </td>
                <td style="text-align: center; width: 300px;">
                    
                    <p style="text-align: left;"><?= $no_pendaftaran?></p>
                    <p style="text-align: left;"><?= $nik ?></p>
                    <p style="text-align: left;"><?= $nama_lengkap ?></p>
                    <p style="text-align: left;"><?=$tempat_lahir?>, <?=$tanggal_lahir?></p>
                    <p style="text-align: left;"><?=$jenis_kelamin?></p>
                    <p style="text-align: left;"><?=$status_perkawinan?></p>
                    <p style="text-align: left;"><?=$agama?></p>
                    <p style="text-align: left;"><?=$alamat?></p>

                </td>
            </tr>
            <?php endforeach;?>

        </tbody>
    </table>

    <h4 style="margin-top:160px; text-align: justify;">Keterangan : Kartu ini berlaku nasional selama 2 tahun dengan keharusan mengisi form perpanjangan kartu pada
        website... setiap 6 bulan sekali bagi pencari kerja yang belum mendapat pekerjaan</h4>
</body>

</html>