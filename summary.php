<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $plan = $_POST["plan"];
    $price = $plan == "monthly" ? "Ksh 2,000/month" : "Ksh 20,000/year";
    $amount = $plan == "monthly" ? 2000 : 20000;
    $name = $_POST['name'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary</title>
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
        <h1>Summary</h1>
        <p><strong>Account Owner:</strong> <?= $name; ?></p>
        <p><strong>Plan:</strong> <?= ucfirst($plan); ?></p>
        <p><strong>Total Amount:</strong> Ksh <?= $amount; ?></p>
        <form action="checkout.php" method="POST">
            <input type="hidden" name="plan" value="<?= $plan; ?>">
            <input type="hidden" name="amount" value="<?= $amount; ?>">
            <button type="submit" class="btn">Proceed to Checkout</button>
        </form>
    </div>
</body>
</html>
