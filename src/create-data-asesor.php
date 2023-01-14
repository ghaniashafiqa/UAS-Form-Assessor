<!DOCTYPE html>
<html>
<head>
  <title>Create Data Asesor</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Create Data Asesor</h1>
        <form action="submit-data-asesor.php" method="post">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Nama Lengkap" name="assessor_name" required>
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <select class="form-control" name="tempat_lahir">
                    <option value="">-- Pilih Kota --</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Surabaya">Surabaya</option>
                    <option value="Medan">Medan</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Bekasi">Bekasi</option>
                    <option value="Tangerang">Tangerang</option>
                    <option value="Depok">Depok</option>
                    <option value="Semarang">Semarang</option>
                    <option value="Palembang">Palembang</option>
                    <option value="Makassar">Makassar</option>
                    <option value="Bogor">Bogor</option>
                    <option value="Denpasar">Denpasar</option>
                    <option value="Malang">Malang</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                    <option value="Surakarta">Surakarta</option>
                    <option value="Padang">Padang</option>
                    <option value="Pekanbaru">Pekanbaru</option>
                    <option value="Bandar Lampung">Bandar Lampung</option>
                    <option value="Samarinda">Samarinda</option>
                    <option value="Cirebon">Cirebon</option>
                    <option value="Banjarmasin">Banjarmasin</option>
                    <option value="Manado">Manado</option>
                    <option value="Batam">Batam</option>
                    <option value="Balikpapan">Balikpapan</option>
                    <option value="Pontianak">Pontianak</option>
                    <option value="Ujung Pandang">Ujung Pandang</option>
                    <option value="Ambon">Ambon</option>
                    <option value="Jayapura">Jayapura</option>
                    <option value="Mataram">Mataram</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" class="form-control" name="birth_date" required>
            </div>
            <div class="form-group">
                <label>NIK</label>
                <input type="text" class="form-control" placeholder="No. NIK" name="nik_number" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="laki-laki" value="Laki-laki" required>
                    <label class="form-check-label" for="laki-laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="perempuan" value="Perempuan" required>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label>Kebangsaan</label>
                <input type="text" class="form-control" placeholder="WNI/WNA" name="nationality" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" placeholder="Alamat lengkap sesuai KTP" name="address" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email Pribadi" name="email" required>
            </div>
            <div class="form-group">
                <label>No. Telp</label>
                <input type="text" class="form-control" placeholder="Nomor Hp yg aktif" name="phone_number" required>
            </div>
            <div class="form-group">
                <label>Pendidikan Terakhir</label>
                <select class="form-control" name="education_level">
                    <option value="">-- Pilih Pendidikan Terakhir --</option>
                    <option value="S3">S3</option>
                    <option value="S2">S2</option>
                    <option value="S1">S1</option>
                </select>
            </div>
            <div class="form-group">
                <label>Nomor Register BNSP</label>
                <input type="text" class="form-control" placeholder="No. Reg BNSP" name="bnsp_reg_num" required>
            </div>
            <div class="form-group">
                <label>Masa Berlaku Sertifikat Asesor</label>
                <input type="date" class="form-control" name="exp_date_sertificate" required>
            </div>
            <div class="form-group">
                <label>Nama Lembaga/Perusahaan</label>
                <input type="text" class="form-control" placeholder="Nama perusahaan tempat kerja" name="institutional_name" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
