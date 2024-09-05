<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "preteset";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$agent_code = $_GET['agent_code'];

$sql = "DELETE FROM AGENTS WHERE AGENT_CODE='$agent_code'";

if ($conn->query($sql) === TRUE) {
    echo "Data agent berhasil dihapus.";

    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
