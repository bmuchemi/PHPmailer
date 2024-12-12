<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose a Plan</title>
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
            width: 60%;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .plan-options {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .plan-card {
            flex: 1;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 10px;
            border: 2px solid #ddd;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .plan-card:hover {
            border-color: #4CAF50;
            transform: scale(1.05);
        }

        .plan-card h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .plan-card p {
            font-size: 16px;
            margin-bottom: 10px;
            color: #555;
        }

        .plan-card .price {
            font-size: 18px;
            font-weight: bold;
            color: #4CAF50;
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
        <h1>Choose Your Subscription Plan</h1>
        <form action="summary.php" method="POST">
            <div class="plan-options">
                <label class="plan-card">
                    <input type="radio" name="plan" value="monthly" style="display: none;" required>
                    <h2>Monthly Plan</h2>
                    <p>Access for 30 days</p>
                    <p class="price">Ksh 2000/month</p>
                </label>
                <label class="plan-card">
                    <input type="radio" name="plan" value="annual" style="display: none;" required>
                    <h2>Annual Plan</h2>
                    <p>Access for 1 year</p>
                    <p class="price">Ksh 20,000/year</p>
                </label>
            </div>
            <button type="submit" class="btn">Proceed</button>
        </form>
    </div>
</body>
</html>
