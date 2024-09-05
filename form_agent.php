<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Tambah Agent</title>
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
    }
    input[type="text"] {
        width: 100%;
        padding: 8px;
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
        <h1>Form Tambah Agent</h1>
        <form action="proses_tambah_agent.php" method="POST">
            <label for="agent_code">Agent Code:</label>
            <input type="text" id="agent_code" name="agent_code" required>

            <label for="agent_name">Agent Name:</label>
            <input type="text" id="agent_name" name="agent_name" required>

            <label for="working_area">Working Area:</label>
            <input type="text" id="working_area" name="working_area" required>

            <label for="commission">Commission:</label>
            <input type="text" id="commission" name="commission" required>

            <label for="phone_no">Phone Number:</label>
            <input type="text" id="phone_no" name="phone_no" required>

            <label for="country">Country:</label>
            <input type="text" id="country" name="country" required>

            <input type="submit" value="Tambahkan Agent">
        </form>
    </div>
</body>
</html>
