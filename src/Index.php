<!-- Program 1 -->
<?php
// $result_str = $result='';
if (isset($_POST['unit-submit'])) { //Submit 
    $units = $_POST['units'];      //Input type  
    if (!empty($units)) {
        $result = cal_bill($units);
        $result_str = 'Total ammount of ' . $units . ' = ' . $result;
    }
}
function cal_bill($units)
{
    $unitfirst = 3.50;
    $unitsecond = 4.00;
    $unitthird = 5.20;
    $unitfourth = 6.50;
    if ($units <= 50) {
        $bill = $units * $unitfirst;
    } elseif ($units > 50 && $units <= 100) {
        $temp = $units * $unitfirst;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unitsecond);
    } elseif ($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $unitsecond);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unitthird);
    } else {
        $temp = (50 * 3.5) + (100 * $unitsecond) + (100 * $unitthird);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unitfourth);
    }
    return number_format((float)$bill, 2, '.', '');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity_Bill Using PHP</title>
</head>

<body>
    <div id="wrapper">
        <h3>Program to calculate Electricity bill in PHP</h3>
        <form action="" method="post">
            <input type="number" name="units" placeholder="Enter your no. of units">
            <input type="submit" name="unit-submit" value="Submit">
        </form>
    </div>
    <div>
        <?php echo '<br />' . $result_str; ?>
</body>

</html>