<?php
$res = 0;
$error = '';
$hour = $_POST['hours'];
$sel = $_POST['check'];
// echo $hour;
if (!empty($hour)) {
    if ($sel == 'min') {
        $res = ($hour * 60);
    } elseif ($sel == 'sec') {
        $res = ($hour * 60 * 60);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion</title>
</head>
<style>
    .radio {
        padding: 13px 33px;
        margin: 11px 138px;
    }

    .res {
        padding: 21px 48px;
        margin: 5px 124px;
    }

    .button {
        padding: 11px 16px;
        margin: 5px 188px;
    }
</style>

<body>
    <div id="wrapper">
        <form action="" method="POST">
            Enter Value in Hours: <input type="number" name="hours" value=""><br>
            <div class="radio">
                <input type="radio" name="check" value="min">Hours to Min<br>
                <input type="radio" name="check" value="sec">Hours to Sec<br>
            </div>
            <div class="res">
                <?php echo $hour . " Hour = " . $res . $sel; ?><br>
            </div>
            <div class="button">
                <input type="Submit" name="submit" value="Convert"><br>
            </div>
        </form>
    </div>
</body>

</html>