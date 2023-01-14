<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Asesor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Edit Data Asesor</h1>
        <form action="submit-data-asesor.php" method="post">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="assessor_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date" name="birth_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label>NIK</label>
                <input type="text" name="nik_number" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="gender" class="form-control" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label>Kebangsaan</label>
                <input type="text" name="nationality" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="address" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>No. Telp</label>
                <input type="text" name="phone_number" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Pendidikan Terakhir</label>
                <input type="text" name="education_level" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nomor Register BNSP</label>
                <input type="text" name="bnsp_reg_num" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Masa Berlaku Sertifikat Asesor</label>
                <input type="date" name="exp_date_sertificate" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nama Lembaga/Perusahaan</label>
                <input type="text" name="institutional_name" class="form-control" required>
            </div>
            <input type="hidden" name="nik_number" value="<?php echo $_GET['nik_number']; ?>">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
