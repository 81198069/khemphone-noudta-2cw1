<?php 

    $conn = mysqli_connect("localhost", "root", "", "real_estate");

    if (!$conn) {
        die("Failed to connec to databse " . mysqli_error($conn));
    }

?>