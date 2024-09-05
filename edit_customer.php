<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "preteset";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mendapatkan ID customer yang akan di-edit
$cust_code = $_GET['cust_code'];

// Mendapatkan data customer yang akan di-edit dari database
$sql = "SELECT * FROM CUSTOMER WHERE CUST_CODE='$cust_code'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Data customer tidak ditemukan.";
    exit();
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Customer</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        margin-bottom: 20px;
    }
    label {
        font-weight: bold;
    }
    input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<button onclick="location.href='index.php';" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer; ">Kembali</button>
    <div class="container">


        <h1>Edit Customer</h1>
        <form action="proses_edit_customer.php" method="POST">
            <input type="hidden" name="cust_code" value="<?php echo $row['CUST_CODE']; ?>">

            <label for="cust_name">Customer Name:</label>
            <input type="text" id="cust_name" name="cust_name" value="<?php echo $row['CUST_NAME']; ?>" required>

            <label for="cust_city">Customer City:</label>
            <input type="text" id="cust_city" name="cust_city" value="<?php echo $row['CUST_CITY']; ?>" required>

            <label for="working_area">Working Area:</label>
            <input type="text" id="working_area" name="working_area" value="<?php echo $row['WORKING_AREA']; ?>" required>

            <label for="cust_country">Customer Country:</label>
            <input type="text" id="cust_country" name="cust_country" value="<?php echo $row['CUST_COUNTRY']; ?>" required>

            <label for="grade">Grade:</label>
            <input type="text" id="grade" name="grade" value="<?php echo $row['GRADE']; ?>" required>

            <label for="opening_amt">Opening Amount:</label>
            <input type="text" id="opening_amt" name="opening_amt" value="<?php echo $row['OPENING_AMT']; ?>" required>

            <label for="receive_amt">Receive Amount:</label>
            <input type="text" id="receive_amt" name="receive_amt" value="<?php echo $row['RECEIVE_AMT']; ?>" required>

            <label for="payment_amt">Payment Amount:</label>
            <input type="text" id="payment_amt" name="payment_amt" value="<?php echo $row['PAYMENT_AMT']; ?>" required>

            <label for="outstanding_amt">Outstanding Amount:</label>
            <input type="text" id="outstanding_amt" name="outstanding_amt" value="<?php echo $row['OUTSTANDING_AMT']; ?>" required>

            <label for="phone_no">Phone Number:</label>
            <input type="text" id="phone_no" name="phone_no" value="<?php echo $row['PHONE_NO']; ?>" required>

            <label for="agent_code">Agent Code:</label>
            <input type="text" id="agent_code" name="agent_code" value="<?php echo $row['AGENT_CODE']; ?>" required>

            <input type="submit" value="Simpan Perubahan">
        </form>
    </div>
</body>
</html>

