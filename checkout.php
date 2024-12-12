<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plan = $_POST["plan"];
    $amount = $_POST["amount"];
    // Simulate sending invoice (you can implement email functionality here)
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 40%;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 22px;
            color: #333;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
            color: #555;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Checkout Complete</h1>
        <p>Your information has been successfully captured!</p>
        <p>An invoice has been sent to your email address.</p>
        <a href="process_form.php" class="btn">Back to Plans</a>
    </div>
</body>
</html>
