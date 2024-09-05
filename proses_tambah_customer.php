<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "preteset";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$cust_code = $_POST['cust_code'];
$cust_name = $_POST['cust_name'];
$cust_city = $_POST['cust_city'];
$working_area = $_POST['working_area'];
$cust_country = $_POST['cust_country'];
$grade = $_POST['grade'];
$opening_amt = $_POST['opening_amt'];
$receive_amt = $_POST['receive_amt'];
$payment_amt = $_POST['payment_amt'];
$outstanding_amt = $_POST['outstanding_amt'];
$phone_no = $_POST['phone_no'];
$agent_code = $_POST['agent_code'];

$sql = "INSERT INTO CUSTOMER (CUST_CODE, CUST_NAME, CUST_CITY, WORKING_AREA, CUST_COUNTRY, GRADE, OPENING_AMT, RECEIVE_AMT, PAYMENT_AMT, OUTSTANDING_AMT, PHONE_NO, AGENT_CODE) 
        VALUES ('$cust_code', '$cust_name', '$cust_city', '$working_area', '$cust_country', '$grade', '$opening_amt', '$receive_amt', '$payment_amt', '$outstanding_amt', '$phone_no', '$agent_code')";

if ($conn->query($sql) === TRUE) {

    header("Location: home.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
