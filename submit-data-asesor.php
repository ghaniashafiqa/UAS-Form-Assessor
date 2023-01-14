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

    // Retrieve form data
    $assessor_name = $_POST['assessor_name'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $birth_date = $_POST['birth_date'];
    $nik_number = $_POST['nik_number'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $education_level = $_POST['education_level'];
    $bnsp_reg_num = $_POST['bnsp_reg_num'];
    $exp_date_sertificate = $_POST['exp_date_sertificate'];
    $institutional_name = $_POST['institutional_name'];

    // Insert data into the database
    $sql = "INSERT INTO data_asesor (assessor_name, tempat_lahir, birth_date, nik_number, gender, nationality, address, email, phone_number, education_level, bnsp_reg_num, exp_date_sertificate, institutional_name)
    VALUES ('$assessor_name', '$tempat_lahir', '$birth_date', '$nik_number', '$gender', '$nationality', '$address', '$email', '$phone_number', '$education_level', '$bnsp_reg_num', '$exp_date_sertificate', '$institutional_name')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Data has been successfully added!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

// Close the connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Berhasil Create Data Asesor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-6">
            <a href="index.php" class="btn btn-primary">Back</a>
        </div>
    </div>
    </div>
</body>
</html>