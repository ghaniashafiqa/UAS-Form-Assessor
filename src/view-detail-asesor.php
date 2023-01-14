<!DOCTYPE html>
<html>
<head>
    <title>View Detail Asesor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">View Detail Asesor</h1>
        <table class="table table-bordered">
            <tbody>
                <?php
                // Connect to the database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "pendaftaran";
                
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                // Retrieve data from the database
                $sql = "SELECT * FROM data_asesor WHERE nik_number='".$_GET['nik_number']."'";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo 
                        "<tr>
                            <th>Nama Lengkap</th>
                            <td>".$row["assessor_name"]."</td>
                        </tr>
                        <tr>
                        <th>Tempat Lahir</th>
                        <td>".$row["tempat_lahir"]."</td>
                        </tr>
                        <tr>
                        <th>Tanggal Lahir</th>
                        <td>".$row["birth_date"]."</td>
                        </tr>
                        <tr>
                        <th>NIK</th>
                        <td>".$row["nik_number"]."</td>
                        </tr>
                        <tr>
                        <th>Jenis Kelamin</th>
                        <td>".$row["gender"]."</td>
                        </tr>
                        <tr>
                        <th>Kebangsaan</th>
                        <td>".$row["nationality"]."</td>
                        </tr>
                        <tr>
                        <th>Alamat</th>
                        <td>".$row["address"]."</td>
                        </tr>
                        <tr>
                        <th>Email</th>
                        <td>".$row["email"]."</td>
                        </tr>
                        <tr>
                        <th>No. Telp</th>
                        <td>".$row["phone_number"]."</td>
                        </tr>
                        <tr>
                        <th>Pendidikan Terakhir</th>
                        <td>".$row["education_level"]."</td>
                        </tr>
                        <tr>
                        <th>Nomor Register BNSP</th>
                        <td>".$row["bnsp_reg_num"]."</td>
                        </tr>
                        <tr>
                        <th>Masa Berlaku Sertifikat Asesor</th>
                        <td>".$row["exp_date_sertificate"]."</td>
                        </tr>
                        <tr>
                        <th>Nama Lembaga/Perusahaan</th>
                        <td>".$row["institutional_name"]."</td>
                        </tr>";
                    }
                } else {
                    echo "0 results";
                }

                // Close the connection
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col-6">
                    <a href="view-data-asesor.php" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
  