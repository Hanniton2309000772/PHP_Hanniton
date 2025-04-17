

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Advanced PHP Calculator</title>
    <style>
        body {
            background: linear-gradient(to right, #00c6ff, #0072ff);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .calculator {
            background-color: #ffffff;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 380px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        input[type="submit"],
        .clear {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        input[type="submit"]:hover,
        .clear:hover {
            background-color: #218838;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9f7ef;
            border-left: 4px solid #28a745;
            font-size: 18px;
            color: #333;
            border-radius: 8px;
        }

        .history {
            margin-top: 25px;
            text-align: left;
        }

        .history h3 {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
        }

        .history ul {
            list-style-type: square;
            padding-left: 20px;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="calculator">
        <h2>PHP Super Calculator</h2>
        <form method="get" action="">
            First Number:
            <input type="number" name="num1" required>

            Second Number:
            <input type="number" name="num2" required>
            Third Number:
            <input type="number" name="num3" required>

            Operation:
            <select name="operator" required>
                <option value="add">Add (+)</option>
                <option value="subtract">Subtract (−)</option>
                <option value="multiply">Multiply (×)</option>
                <option value="divide">Divide (÷)</option>
                <option value="percent">Percent (%)</option>
                <option value="exponent">Exponent (^)</option>
            </select>

            <input type="submit" value="Calculate">
        </form>

        
        
        <form method="post" action="">
            <button class="clear" name="clear" type="submit">Clear History</button>
        </form>

            </div>
</body>
</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['num1'], $_GET['num2'], $_GET['num3'], $_GET['operator'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];
    $operator = $_GET['operator'];

    // Validate inputs
    if (!is_numeric($num1) || !is_numeric($num2) || !is_numeric($num3)) {
        $result = "Error: All inputs must be valid numbers.";
    } else {
        switch ($operator) {
            case "add":
                $result = $num1 + $num2 + $num3;
                break;
            case "subtract":
                $result = $num1 - $num2 - $num3;
                break;
            case "multiply":
                $result = $num1 * $num2 * $num3;
                break;
            case "divide":
                if ($num2 == 0 || $num3 == 0) {
                    $result = "Error: Division by zero is not allowed.";
                } else {
                    $result = $num1 / $num2 / $num3;
                }
                break;
            case "percent":
                $result = ($num1 * $num2 * $num3) / 100;
                break;
            case "exponent":
                $result = $num1 ** ($num2 ** $num3); // Adjusted for precedence
                break;
            default:
                $result = "Invalid operation.";
        }
    }

    echo "<div class='result'>Result: $result</div>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['clear'])) {
    // Clear history logic here
}

?>