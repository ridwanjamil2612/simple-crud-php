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


$sql = "SELECT * FROM AGENTS WHERE AGENT_CODE='$agent_code'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Data agent tidak ditemukan.";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Agent</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 500px;
        margin: 50px auto;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }
    h1 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }
    label {
        font-weight: bold;
        color: #555;
    }
    input[type="text"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<button onclick="location.href='index.php';" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">Kembali</button>
    <div class="container">
   

        <h1>Edit Agent</h1>
        <form action="proses_edit_agent.php" method="POST">
            <input type="hidden" name="agent_code" value="<?php echo $row['AGENT_CODE']; ?>">

            <label for="agent_name">Agent Name:</label>
            <input type="text" id="agent_name" name="agent_name" value="<?php echo $row['AGENT_NAME']; ?>" required>

            <label for="working_area">Working Area:</label>
            <input type="text" id="working_area" name="working_area" value="<?php echo $row['WORKING_AREA']; ?>" required>

            <label for="commission">Commission:</label>
            <input type="text" id="commission" name="commission" value="<?php echo $row['COMMISSION']; ?>" required>

            <label for="phone_no">Phone Number:</label>
            <input type="text" id="phone_no" name="phone_no" value="<?php echo $row['PHONE_NO']; ?>" required>

            <label for="country">Country:</label>
            <input type="text" id="country" name="country" value="<?php echo $row['COUNTRY']; ?>" required>

            <input type="submit" value="Simpan Perubahan">
        </form>
    </div>
</body>
</html>
