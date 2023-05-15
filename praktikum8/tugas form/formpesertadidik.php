<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>REGISTRASI PESERTA DIDIK</h2>
        <form method="POST" action="simpan1.php">
            <div class="form-group">
                <label for="jenis_pendaftaran">Jenis Pendaftaran<span class="text-danger">*</span></label>
                <div class="radio">
                    <label class="btn btn-default btn-block">
                        <input type="radio" name="jenis_pendaftaran" id="siswa-baru" value="Siswa Baru">
                        <span class=""></span>
                        Siswa Baru
                        <div class="details">
                            <small>Untuk calon siswa yang belum pernah mendaftar di sekolah ini.</small>
                        </div>
                    </label>
                </div>
                <div class="radio">
                    <label class="btn btn-default btn-block">
                        <input type="radio" name="jenis_pendaftaran" id="pindahan" value="Pindahan">
                        <span class=""></span>
                        Pindahan
                        <div class="details">
                            <small>Untuk calon siswa yang sedang atau pernah bersekolah di sekolah lain.</small>
                        </div>
                    </label>
                </div>
            </div>

            <script>
                $(document).ready(function () {
                    $('.details').hide(); // menyembunyikan detail pada awalnya

                    $('.btn').click(function () {
                        $('.details').slideUp(); // menyembunyikan detail pada radio button yang lain
                        if ($(this).find('.details').is(':visible')) {
                            $(this).find('.details').slideUp();
                        } else {
                            $(this).find('.details').slideDown();
                        }
                    });
                });
            </script>

            <div class="form-group">
                <label for="tanggal_masuk">Tanggal Masuk Sekolah<span class="text-danger">*</span></label>
                <input type="date" name="tanggal_masuk" id="tanggal-masuk" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nis">NIS<span class="text-danger">*</span></label>
                <input type="text" name="nis" id="nis" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nomer_peserta_ujian">Nomer Peserta Ujian<span class="text-danger">*</span></label>
                <input type="text" name="nomer_peserta_ujian" id="nomer-peserta-ujian" class="form-control" required>
                <small>*Nomer Peserta Ujian 20 digit tertera dalam sertifikat SKHUN SD, diisi sebagai peserta didik
                    jenjang SMP</small>
            </div>

            <div class="form-group">
                <label for="pernah_paud">Apakah Pernah PAUD<span class="text-danger">*</span></label>
                <div class="radio">
                    <label><input type="radio" name="pernah_paud" id="pernah-paud-ya" value="Ya">Ya</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="pernah_paud" id="pernah-paud-tidak" value="Tidak">Tidak</label>
                </div>
            </div>

            <div class="form-group">
                <label for="pernah_tk">Apakah Pernah TK<span class="text-danger">*</span></label>
                <div class="radio">
                    <label><input type="radio" name="pernah_tk" id="pernah-tk-ya" value="Ya">Ya</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="pernah_tk" id="pernah-tk-tidak" value="Tidak">Tidak</label>
                </div>
            </div>

            <div class="form-group">
                <label for="no_seri_skhun">Nomor Seri SKHUN Sebelumnya<span class="text-danger">*</span></label>
                <input type="text" name="no_seri_skhun" class="form-control">
                <small>*Digit 16 yang tertera di SKHUN SD diisi pada jenjang SMP</small>
            </div>

            <div class="form-group">
                <label for="no_seri_ijazah">No. Seri Ijazah Sebelumnya<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="no_seri_ijazah" name="no_seri_ijazah"
                    placeholder="Masukkan No. Seri Ijazah Sebelumnya" required>
                <small id="no_seri_ijazah_help" class="form-text text-muted">Digit 16 yang tertera di IJAZAH SD diisi
                    pada jenjang SMP</small>
            </div>

            <!-- Form Hobi -->
            <div class="form-group">
                <label for="hobi">Hobi<span class="text-danger">*</span></label>
                <select class="form-control" id="hobi" name="hobi" required>
                    <option value="">Pilih Hobi</option>
                    <option value="Olahraga">Olahraga</option>
                    <option value="Kesenian">Kesenian</option>
                    <option value="Membaca">Membaca</option>
                    <option value="Menulis">Menulis</option>
                    <option value="Traveling">Traveling</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <!-- Form Cita-Cita -->
            <div class="form-group">
                <label for="cita_cita">Cita-Cita<span class="text-danger">*</span></label>
                <select class="form-control" id="cita_cita" name="cita_cita" required>
                    <option value="">Pilih Cita-Cita</option>
                    <option value="PNS">PNS</option>
                    <option value="TNI/POLRI">TNI/POLRI</option>
                    <option value="Guru/Dosen">Guru/Dosen</option>
                    <option value="Dokter">Dokter</option>
                    <option value="Politikus">Politikus</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Seni/Lukis/Artis/Senyum">Seni/Lukis/Artis/Senyum</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <!-- Form Data Pribadi -->
            <h3>Data Pribadi</h3>
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                    placeholder="Masukkan Nama Lengkap" required>
            </div>

            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin<span class="text-danger">*</span></label>
                <div class="d-flex justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki_laki"
                            value="Laki-laki" required>
                        <label class="form-check-label" for="laki_laki">
                            <i class="fa fa-male"></i> Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                            value="Perempuan" required>
                        <label class="form-check-label" for="perempuan">
                            <i class="fa fa-female"></i> Perempuan
                        </label>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <label for="nisn">NISN / Nomor Induk Siswa Nasional<span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN" required>
            </div>
            <div class="form-group">
                <label for="nik">NIK / Nomor Induk Kependudukan<span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                    placeholder="Masukkan Tempat Lahir" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir<span class="text-danger">*</span></label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                    placeholder="Masukkan Tanggal Lahir" required>
            </div>
            <div class="form-group">
                <label for="agama">Agama<span class="text-danger">*</span></label>
                <select class="form-control" id="agama" name="agama" required>
                    <option value="">-- Pilih Agama --</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Kong Hu Cu">Kong Hu Cu</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="berkebutuhan_khusus">Berkebutuhan Khusus</label>
                <input type="text" class="form-control" id="berkebutuhan_khusus" name="berkebutuhan_khusus"
                    placeholder="Masukkan Berkebutuhan Khusus">
            </div>
            <div class="form-group">
                <label for="alamat_jalan">Alamat Jalan<span class="text-danger">*</span></label>
                <textarea class="form-control" id="alamat_jalan" name="alamat_jalan" rows="3" required></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="rt">RT<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="rt" name="rt" placeholder="Masukkan RT" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="rw">RW<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="rw" name="rw" placeholder="Masukkan RW" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nama_dusun">Nama Dusun</label>
                    <input type="text" class="form-control" id="nama_dusun" name="nama_dusun"
                        placeholder="Masukkan Nama Dusun">
                </div>
                <div class="form-group col-md-6">
                    <label for="kelurahan_desa">Nama Kelurahan/Desa<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="kelurahan_desa" name="kelurahan_desa"
                        placeholder="Masukkan Nama Kelurahan/Desa" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kecamatan">Kecamatan<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="kecamatan" name="kecamatan"
                        placeholder="Masukkan Kecamatan" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="kode_pos">Kode Pos</label>
                    <input type="text" class="form-control" id="kode_pos" name="kode_pos"
                        placeholder="Masukkan Kode Pos">
                </div>
            </div>
            <div class="form-group">
                <label for="tempat_tinggal">Tempat Tinggal<span class="text-danger">*</span></label>
                <select class="form-control" id="tempat_tinggal" name="tempat_tinggal" required>
                    <option value="">-- Pilih Tempat Tinggal --</option>
                    <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                    <option value="Wali">Wali</option>
                    <option value="Kos">Kos</option>
                    <option value="Asrama">Asrama</option>
                    <option value="Panti Asuhan">Panti Asuhan</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="moda_transportasi">Moda Transportasi<span class="text-danger">*</span></label>
                <select class="form-control" id="moda_transportasi" name="moda_transportasi" required>
                    <option value="">-- Pilih Moda Transportasi --</option>
                    <option value="Jalan Kaki">Jalan Kaki</option>
                    <option value="Sepeda">Sepeda</option>
                    <option value="Sepeda Motor">Sepeda Motor</option>
                    <option value="Mobil">Mobil</option>
                    <option value="Ojek">Ojek</option>
                    <option value="Angkutan Umum">Angkutan Umum</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nomor_hp">Nomor HP<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" placeholder="Masukkan Nomor HP"
                    required>
            </div>
            <div class="form-group">
                <label for="nomor_telepon">Nomor Telepon</label>
                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon"
                    placeholder="Masukkan Nomor Telepon">
            </div>
            <div class="form-group">
                <label for="email">E-mail Pribadi<span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan E-mail Pribadi"
                    required>
            </div>
            <div class="form-group">
                <label for="penerima_kps">Penerima KPS/PKH/KIP</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="penerima_kps" id="ya_kps" value="Ya">
                    <label class="form-check-label" for="ya_kps">
                        Ya
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="penerima_kps" id="tidak_kps" value="Tidak"
                        checked>
                    <label class="form-check-label" for="tidak_kps">
                        Tidak
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="no_kps">No KPS/KKS/PKHI/KIP</label>
                <input type="text" class="form-control" id="no_kps" name="no_kps"
                    placeholder="Masukkan No KPS/KKS/PKHI/KIP">
            </div>
            <div class="form-group">
                <label for="kewarganegaraan">Kewarganegaraan<span class="text-danger">*</span></label>
                <select class="form-control" id="kewarganegaraan" name="kewarganegaraan" required>
                    <option value="">- Pilih Kewarganegaraan -</option>
                    <option value="WNI">Indonesia (WNI)</option>
                    <option value="WNA">Asing (WNA)</option>
                </select>
            </div>

            <div class="form-group" id="nama_negara_container" style="display: none;">
                <label for="nama_negara">Nama Negara<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="nama_negara" name="nama_negara">
            </div>

            <script>
                $(document).ready(function () {
                    $('#kewarganegaraan').change(function () {
                        if ($(this).val() === 'WNA') {
                            $('#nama_negara_container').show();
                        } else {
                            $('#nama_negara_container').hide();
                        }
                    });
                });
            </script>


            <!-- Data Ayah Kandung -->
            <h3>Data Ayah Kandung</h3>
            <div class="form-group">
                <label for="nama_ayah">NamaAyah Kandung<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama Ayah"
                    required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tahun_lahir_ayah">Tahun Lahir<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="tahun_lahir_ayah" name="tahun_lahir_ayah"
                        placeholder="Masukkan Tahun Lahir Ayah" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="pendidikan_ayah">Pendidikan Terakhir<span class="text-danger">*</span></label>
                    <select class="form-control" id="pendidikan_ayah" name="pendidikan_ayah" required>
                        <option value="">- Pilih Pendidikan Terakhir Ayah -</option>
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="SD / Sederajat">SD / Sederajat</option>
                        <option value="SMP / Sederajat">SMP / Sederajat</option>
                        <option value="SMA / Sederajat">SMA / Sederajat</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="pekerjaan_Ayah">Pekerjaan<span class="text-danger">*</span></label>
                        <select class="form-control" id="pekerjaan_Ayah" name="pekerjaan_Ayah" required>
                            <option value="">Pilih Pekerjaan Ayah</option>
                            <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                            <option value="Wirausaha">Wirausaha</option>
                            <option value="Guru">Guru</option>
                            <option value="Dokter">Dokter</option>
                            <option value="Pengacara">Pengacara</option>
                            <option value="Akuntan">Akuntan</option>
                            <option value="Pilot">Pilot</option>
                            <option value="Pramugari">Pramugari</option>
                            <option value="TNI">TNI</option>
                            <option value="POLRI">POLRI</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="penghasilan_ayah">Penghasilan Bulanan<span class="text-danger">*</span></label>
                        <select class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" required>
                            <option value="">- Pilih Penghasilan Bulanan Ayah -</option>
                            <option value="< 500.000">
                                < 500.000</option>
                            <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                            <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                            <option value="> 2.000.000">> 2.000.000</option>
                        </select>
                    </div>
                </div>
                <div class="form-group>
                <label for=" kebutuhan_khusus_ayah">Kebutuhan Khusus Ayah<span class="text-danger">*</span></label>
                    <select class="form-control" id="kebutuhan_khusus_ayah" name="kebutuhan_khusus_ayah" required>
                        <option value="">- Pilih Kebutuhan Khusus Ayah -</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                        <option value="Tuna Netra">Tuna Netra</option>
                        <option value="Tuna Rungu">Tuna Rungu</option>
                        <option value="Tuna Daksa">Tuna Daksa</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <h3>Data ibu Kandung</h3>
                <div class="form-group">
                    <label for="nama_ibu">Namaibu Kandung<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
                        placeholder="Masukkan Nama ibu" required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tahun_lahir_ibu">Tahun Lahir<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="tahun_lahir_ibu" name="tahun_lahir_ibu"
                            placeholder="Masukkan Tahun Lahir ibu" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="pendidikan_ibu">Pendidikan Terakhir<span class="text-danger">*</span></label>
                        <select class="form-control" id="pendidikan_ibu" name="pendidikan_ibu" required>
                            <option value="">- Pilih Pendidikan Terakhir ibu -</option>
                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                            <option value="SD / Sederajat">SD / Sederajat</option>
                            <option value="SMP / Sederajat">SMP / Sederajat</option>
                            <option value="SMA / Sederajat">SMA / Sederajat</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="pekerjaan_ibu">Pekerjaan<span class="text-danger">*</span></label>
                        <select class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" required>
                            <option value="">Pilih Pekerjaan Ibu</option>
                            <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                            <option value="Wirausaha">Wirausaha</option>
                            <option value="Guru">Guru</option>
                            <option value="Dokter">Dokter</option>
                            <option value="Pengacara">Pengacara</option>
                            <option value="Akuntan">Akuntan</option>
                            <option value="Pilot">Pilot</option>
                            <option value="Pramugari">Pramugari</option>
                            <option value="TNI">TNI</option>
                            <option value="POLRI">POLRI</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="penghasilan_ibu">Penghasilan Bulanan<span class="text-danger">*</span></label>
                        <select class="form-control" id="penghasilan_ibu" name="penghasilan_ibu" required>
                            <option value="">- Pilih Penghasilan Bulanan ibu -</option>
                            <option value="< 500.000">
                                < 500.000</option>
                            <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                            <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                            <option value="> 2.000.000">> 2.000.000</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="kebutuhan_khusus_ibu">Kebutuhan Khusus ibu<span class="text-danger">*</span></label>
                    <select class="form-control" id="kebutuhan_khusus_ibu" name="kebutuhan_khusus_ibu" required>
                        <option value="">- Pilih Kebutuhan Khusus ibu -</option>
                        <option value="Tidak Ada">Tidak Ada</option>
                        <option value="Tuna Netra">Tuna Netra</option>
                        <option value="Tuna Rungu">Tuna Rungu</option>
                        <option value="Tuna Daksa">Tuna Daksa</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
        </form>