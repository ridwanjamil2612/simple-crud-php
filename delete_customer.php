<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "preteset";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$cust_code = $_GET['cust_code'];


$sql = "DELETE FROM CUSTOMER WHERE CUST_CODE='$cust_code'";

if ($conn->query($sql) === TRUE) {
    echo "Data customer berhasil dihapus.";

    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
