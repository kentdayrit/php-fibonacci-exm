<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Sequence Generator</title>
</head>
<body>

<h2>Fibonacci Sequence Generator</h2>

<form action="" method="post">
    <label for="inputNumber">Enter a number (1-20): </label>
    <input type="number" name="inputNumber" id="inputNumber" min="1" max="20" required>
    <button type="submit">Generate Fibonacci Sequence</button>
</form>

<?php
function generateFibonacci($n) {
    if ($n < 1 || $n > 20) {
        return "Input should be an integer value between 1 and 20.";
    }

    $fibonacciSequence = array();
    $fibonacciSequence[0] = 0;
    $fibonacciSequence[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacciSequence[$i] = $fibonacciSequence[$i - 1] + $fibonacciSequence[$i - 2];
    }

    return $fibonacciSequence;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputNumber = isset($_POST['inputNumber']) ? (int)$_POST['inputNumber'] : 0;
    $output = generateFibonacci($inputNumber);

    echo "<p>Input: $inputNumber, Output: " . implode(', ', $output) . "</p>";
}
?>

</body>
</html>
