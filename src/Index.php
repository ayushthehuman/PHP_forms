<?php
$area = 0;
$perimeter = 0;
$f_len = "";
$f_bre = "";
if (isset($_POST['f_button'])) {
    $f_len = $_POST['f_len'];
    $f_bre = $_POST['f_bre'];
    // Area formula
    $area = $f_len * $f_bre;
    // Perimeter formula
    $perimeter = 2 * ($f_len + $f_bre);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area And Perimeter</title>
    <style>
        #wrapper {
            background-color: grey;
            width: 80%;
            padding: 16px 50px;
        }

        .len {
            padding: 2px 8px;
        }

        .bre {
            padding: 1px 0px;
            margin: 6px 0px;
        }

        .cal {
            padding: 8px 11px;
            margin: 6px 61px;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <form action="" method="POST">
            <div class="len">

                <b>Length : </b><input type="number" name="f_len" value="<?php echo $f_len; ?>" </div>
                <div class="bre">

                    <b>Breadth : </b><input type="number" name="f_bre" value="<?php echo $f_bre; ?>" </div>
                    <div class="cal">

                        <input type="Submit" name="f_button" value="calculate Area and Perimeter" </div>
                    </div>
                    <?php echo "<b>Area is</b> " . $area . "<b> sq. mtr.</b>"; ?><br>
                    <?php echo "<b>Perimeter is</b> " . $perimeter . " <b>mtr.</b>"; ?>
</body>

</html>