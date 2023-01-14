<!DOCTYPE html>
<html>
<head>
    <title>View Data Asesor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">View Data Asesor</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>NIK</th>
                    <th>Email</th>
                    <th>Nomor Register BNSP</th>
                    <th>Masa Berlaku Sertifikat Asesor</th>
                    <th>Action</th>
                </tr>
            </thead>
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
            $sql = "SELECT assessor_name, nik_number, email, bnsp_reg_num, exp_date_sertificate FROM data_asesor";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <td>".$row["assessor_name"]."</td>
                <td>".$row["nik_number"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["bnsp_reg_num"]."</td>
                <td>".$row["exp_date_sertificate"]."</td>
                <td>
                <button class='btn btn-primary'><a href='edit-data-asesor.php?nik_number=" .$row['nik_number']."'>Edit</a></button>
                <button class='btn btn-secondary'><a href='view-detail-asesor.php?nik_number=" .$row['nik_number']."'>View Detail</a></button>
                <button class='btn btn-danger'><a href='delete-data-asesor.php?nik_number=" .$row['nik_number']."'>Delete</a></button>
                </td>
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
                    <a href="index.php" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
