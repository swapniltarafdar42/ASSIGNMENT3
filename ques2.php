<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of Even Numbers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }
        h1 {
            background-color: #3498db;
            color: #ffffff;
            padding: 10px;
        }
        form {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 20px;
            display: inline-block;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        button[type="submit"] {
            background-color: #3498db;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        h2 {
            color: #3498db;
        }
    </style>
</head>
<body>
    <h1>Sum of Even Numbers Calculator</h1>
    <form method="post" action="">
        <label for="numbers">Enter numbers (comma-separated):</label>
        <input type="text" name="numbers" id="numbers" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    function sumEvenNumbers($arr) {
        $numbersArray = explode(",", $arr);
        $numbersArray = array_map('trim', $numbersArray);
        $sum = 0;
        foreach ($numbersArray as $number) {
            if (is_numeric($number) && $number % 2 === 0) {
                $sum += (int)$number;
            }
        }
        return $sum;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputNumbers = $_POST["numbers"];
        $evenSum = sumEvenNumbers($inputNumbers);
        echo "<h2>Result:</h2>";
        echo "Sum of even numbers in the input array: " . $evenSum;
    }
    ?>
</body>
</html>
