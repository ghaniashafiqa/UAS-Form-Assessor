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

    // Update the data in the database
    $sql = "UPDATE data_asesor SET assessor_name='$assessor_name', tempat_lahir='$tempat_lahir', birth_date='$birth_date', nik_number='$nik_number', gender='$gender', nationality='$nationality', address='$address', email='$email', phone_number='$phone_number', education_level='$education_level', bnsp_reg_num='$bnsp_reg_num', exp_date_sertificate='$exp_date_sertificate', institutional_name='$institutional_name' WHERE nik_number='$nik_number'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
        header("location:view-data-asesor.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

// Close the connection
mysqli_close($conn);
?>