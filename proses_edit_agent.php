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

$sql = "UPDATE AGENTS SET 
            AGENT_NAME='$agent_name', 
            WORKING_AREA='$working_area', 
            COMMISSION='$commission', 
            PHONE_NO='$phone_no', 
            COUNTRY='$country' 
        WHERE AGENT_CODE='$agent_code'";

if ($conn->query($sql) === TRUE) {
    echo "Data agent berhasil diupdate.";

    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
