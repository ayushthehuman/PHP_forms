<?php
$f_num = $_POST['f_num'];
$f_sec = $_POST['f_sec'];
$operator = $_POST['operator'];
$result = '';
if (is_numeric($f_num) && is_numeric($f_sec)) {
    switch ($operator) {
        case "+":
            $result = $f_num + $f_sec;
            break;
        case "-":
            $result = $f_num - $f_sec;
            break;
        case "*":
            $result = $f_num * $f_sec;
            break;
        case "/":
            $result = $f_num / $f_sec;
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="calculator.css"> -->
    <title>Calculator using PHP</title>
    <style>
        #wrapper {
            background-color: grey;
            width: 60%;
            padding: 3px 56px;
        }

        .second {
            padding: 3px 0px;
        }

        .res {

            padding: 2px 4px;
            margin: 1px 15px;
        }

        .op {
            padding: 9px 63px;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <form action="" method="POST">
            <div class="first">
                <b>Number1 : </b><input type="number" name="f_num" value="<?php echo $f_num; ?>" </div>
                <div class="second">
                    <b>Number2 : </b><input type="number" name="f_sec" value="<?php echo $f_sec; ?>" </div>
                    <div class="res">
                        <b>Result = </b><input readonly="readonly" name="f_res" value="<?php echo $result; ?>" </div>
                        <div class="op">
                            <input type="submit" name="operator" value="+">
                            <input type="submit" name="operator" value="-">
                            <input type="submit" name="operator" value="*">
                            <input type="submit" name="operator" value="/">
                        </div>
        </form>
    </div>
</body>

</html>