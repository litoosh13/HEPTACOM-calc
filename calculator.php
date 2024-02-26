<?php
if (isset($_POST['num1'], $_POST['num2'], $_POST['operator'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            if ($num2 == 0) {
                $result = "Cannot divide by zero!";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = "Invalid operator";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Result</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-5">Result</h2>
        <?php if (isset($result)) : ?>
            <div class="alert alert-success"><?php echo $result; ?></div>
        <?php endif; ?>
        <a href="index.html" class="btn btn-primary">Back to Calculator</a>
    </div>
</body>

</html>
