<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "preteset";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$agent_code = $_POST['agent_code'];
$agent_name = $_POST['agent_name'];
$working_area = $_POST['working_area'];
$commission = $_POST['commission'];
$phone_no = $_POST['phone_no'];
$country = $_POST['country'];


$sql = "INSERT INTO AGENTS (AGENT_CODE, AGENT_NAME, WORKING_AREA, COMMISSION, PHONE_NO, COUNTRY) 
        VALUES ('$agent_code', '$agent_name', '$working_area', '$commission', '$phone_no', '$country')";

if ($conn->query($sql) === TRUE) {

    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
