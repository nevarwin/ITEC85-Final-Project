<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    include("connection.php");
    //check connection
    if (mysqli_connect_errno()) {
        // die equivalent to exit
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "DELETE FROM `student` WHERE id = $id";
    $result = mysqli_query($con, $sql);

    if (!$result) {
        echo "
        <script> 
        alert('Student Not Removed');
        window.location= 'http://localhost/Mentor/NiceAdmin/table.php';
        </script>
        ";
    }
    echo
    "<script>
    alert('Student Successfully Removed');
    window.location= 'http://localhost/Mentor/NiceAdmin/table.php';
    </script>";
}
