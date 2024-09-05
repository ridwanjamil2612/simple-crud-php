<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Tambah Customer</title>
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
    <div class="container">
        <h1>Form Tambah Customer</h1>
        <form action="proses_tambah_customer.php" method="POST">
            <label for="cust_code">Customer Code:</label>
            <input type="text" id="cust_code" name="cust_code" required>

            <label for="cust_name">Customer Name:</label>
            <input type="text" id="cust_name" name="cust_name" required>

            <label for="cust_city">Customer City:</label>
            <input type="text" id="cust_city" name="cust_city" required>

            <label for="working_area">Working Area:</label>
            <input type="text" id="working_area" name="working_area" required>

            <label for="cust_country">Customer Country:</label>
            <input type="text" id="cust_country" name="cust_country" required>

            <label for="grade">Grade:</label>
            <input type="text" id="grade" name="grade" required>

            <label for="opening_amt">Opening Amount:</label>
            <input type="text" id="opening_amt" name="opening_amt" required>

            <label for="receive_amt">Receive Amount:</label>
            <input type="text" id="receive_amt" name="receive_amt" required>

            <label for="payment_amt">Payment Amount:</label>
            <input type="text" id="payment_amt" name="payment_amt" required>

            <label for="outstanding_amt">Outstanding Amount:</label>
            <input type="text" id="outstanding_amt" name="outstanding_amt" required>

            <label for="phone_no">Phone Number:</label>
            <input type="text" id="phone_no" name="phone_no" required>

            <label for="agent_code">Agent Code:</label>
            <input type="text" id="agent_code" name="agent_code" required>

            <input type="submit" value="Tambahkan Customer">
        </form>
    </div>
</body>
</html>
