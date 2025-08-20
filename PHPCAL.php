<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>

    <h1>Simple Calculator</h1>
    <p>Enter two numbers and select an operator to perform the calculation.</p>

    <!-- Form where user enters data -->
    <form method="post" action="">
        <div>
            <label for="num1">First Number:</label>
            <input type="number" name="num1" id="num1" required>
        </div>
        
        <div>
            <label for="operator">Operator:</label>
            <select name="operator" id="operator" required>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </div>

        <div>
            <label for="num2">Second Number:</label>
            <input type="number" name="num2" id="num2" required>
        </div>

        <div>
            <button type="submit" name="calculate">Calculate</button>
        </div>
    </form>

    <?php
    // When the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['calculate'])) {
        // Get numbers and operator from the form
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        
        // Perform the math based on the operator
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                // Check if dividing by zero
                if ($num2 == 0) {
                    $result = 'Error: Division by zero is not allowed.';
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = 'Invalid operator';
                break;
        }

        // Show the result
        echo "<h2>Result: $result</h2>";
    }
    ?>

</body>
</html>
