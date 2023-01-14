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
    
    // Delete data from the database
    $sql = "DELETE FROM data_asesor WHERE nik_number='".$_GET['nik_number']."'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
        header("location:view-data-asesor.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

// Close the connection
mysqli_close($conn);
?>
