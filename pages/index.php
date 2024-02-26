<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEPTACOM Calculator</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .calculator {
            max-width: 300px;
            margin: 0 auto;
            margin-top: 50px;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="calculator">
        <h2 class="text-center">HEPTACOM Calculator</h2>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="num1" placeholder="Enter first number" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="num2" placeholder="Enter second number" required>
            </div>
            <div class="form-group">
                <select class="form-control" name="operator">
                    <option value="add">Addition (+)</option>
                    <option value="subtract">Subtraction (-)</option>
                    <option value="multiply">Multiplication (*)</option>
                    <option value="divide">Division (/)</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="calculate">Calculate</button>
        </form>
        <?php
            if(isset($_POST['calculate'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operator = $_POST['operator'];
                switch($operator){
                    case "add":
                        $result = $num1 + $num2;
                        break;
                    case "subtract":
                        $result = $num1 - $num2;
                        break;
                    case "multiply":
                        $result = $num1 * $num2;
                        break;
                    case "divide":
                        if($num2 == 0){
                            echo "Cannot divide by zero!";
                        } else {
                            $result = $num1 / $num2;
                        }
                        break;
                    default:
                        echo "Invalid operator!";
                }
                echo "<h4 class='mt-3'>Result: $result</h4>";
            }
        ?>
    </div>
</div>

</body>
</html>
