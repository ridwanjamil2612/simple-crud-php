<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Agents and Customers</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    .btn {
        padding: 5px 10px;
        margin-right: 5px;
        text-decoration: none;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 3px;
    }
    .btn-delete {
        background-color: #f44336;
    }
</style>
</head>
<body>
<button onclick="location.href='home.php';" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">Kembali ke Halaman Utama</button>

    <h1>Data Agents</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "preteset";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM AGENTS";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>AGENT_CODE</th>
                    <th>AGENT_NAME</th>
                    <th>WORKING_AREA</th>
                    <th>COMMISSION</th>
                    <th>PHONE_NO</th>
                    <th>COUNTRY</th>
                    <th>Actions</th>
                </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["AGENT_CODE"]."</td>
                    <td>".$row["AGENT_NAME"]."</td>
                    <td>".$row["WORKING_AREA"]."</td>
                    <td>".$row["COMMISSION"]."</td>
                    <td>".$row["PHONE_NO"]."</td>
                    <td>".$row["COUNTRY"]."</td>
                    <td>
                        <a href='edit_agent.php?agent_code=".$row["AGENT_CODE"]."' class='btn'>Edit</a>
                        <a href='#' onclick='confirmDeleteAgent(\"".$row["AGENT_CODE"]."\")' class='btn btn-delete'>Delete</a>
                    </td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

    <h1>Data Customers</h1>
    <?php
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM CUSTOMER";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>CUST_CODE</th>
                    <th>CUST_NAME</th>
                    <th>CUST_CITY</th>
                    <th>WORKING_AREA</th>
                    <th>CUST_COUNTRY</th>
                    <th>GRADE</th>
                    <th>OPENING_AMT</th>
                    <th>RECEIVE_AMT</th>
                    <th>PAYMENT_AMT</th>
                    <th>OUTSTANDING_AMT</th>
                    <th>PHONE_NO</th>
                    <th>AGENT_CODE</th>
                    <th>Actions</th>
                </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["CUST_CODE"]."</td>
                    <td>".$row["CUST_NAME"]."</td>
                    <td>".$row["CUST_CITY"]."</td>
                    <td>".$row["WORKING_AREA"]."</td>
                    <td>".$row["CUST_COUNTRY"]."</td>
                    <td>".$row["GRADE"]."</td>
                    <td>".$row["OPENING_AMT"]."</td>
                    <td>".$row["RECEIVE_AMT"]."</td>
                    <td>".$row["PAYMENT_AMT"]."</td>
                    <td>".$row["OUTSTANDING_AMT"]."</td>
                    <td>".$row["PHONE_NO"]."</td>
                    <td>".$row["AGENT_CODE"]."</td>
                    <td>
                        <a href='edit_customer.php?cust_code=".$row["CUST_CODE"]."' class='btn'>Edit</a>
                        <a href='#' onclick='confirmDeleteCustomer(\"".$row["CUST_CODE"]."\")' class='btn btn-delete'>Delete</a>
                    </td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>


<script>
    function confirmDeleteAgent(agentCode) {
        if (confirm("Apakah Anda yakin ingin menghapus data agent ini?")) {
            window.location.href = 'delete_agent.php?agent_code=' + agentCode;
        }
    }

    function confirmDeleteCustomer(custCode) {
        if (confirm("Apakah Anda yakin ingin menghapus data customer ini?")) {
            window.location.href = 'delete_customer.php?cust_code=' + custCode;
        }
    }
</script>

</body>
</html>
