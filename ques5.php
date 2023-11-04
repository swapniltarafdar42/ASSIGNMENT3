<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            padding: 20px;
            width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        h2 {
            color: #333;
        }

        p {
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Calculator</h1>
    <form method="post" action="">
        <label for="number1">Enter first number:</label>
        <input type="number" name="number1" id="number1" required>
        <br>
        <label for="number2">Enter second number:</label>
        <input type="number" name="number2" id="number2" required>
        <br>
        <button type="submit">Calculate</button>
    </form>

    <br><br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        $sum = $number1 + $number2;
        $difference = $number1 - $number2;
        $product = $number1 * $number2;
        $quotient = $number1 / $number2;
    ?>
        <h2>Calculation</h2>
        <p>Sum: <?php echo $sum; ?></p>
        <p>Difference: <?php echo $difference; ?></p>
        <p>Product: <?php echo $product; ?></p>
        <p>Quotient: <?php echo $quotient; ?></p>
    <?php
    }
    ?>
</body>
</html>
