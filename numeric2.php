<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    $money = $_GET['money'];
    if (!empty($money)) {
        $money12 = ($money * 12);
        $tax = 0;
        if ($money >= 2000000) $tax = 0.3;
        else if ($money12 >= 1000000) $tax = 0.2;
        else if ($money12 >= 500000) $tax = 0.1;
        else if ($money12 >= 100000) $tax = 0.05;
        else $tax = 0;
        echo "เงินเดือน :" . number_format($money) . " บาท  <br/>";
        echo "<br>";
        echo "เงินรายปี : " . number_format($money12) . " บาท  <br/>";
        echo "<br>";
        echo "ภาษี : " . $tax * 100 . " % <br/>";
        echo "<br>";
        echo "ภาษีทั้งหมด : " . number_format($tax * $money12) . " บาท  <br/>";
        echo "<br>";
        echo "เงินคงเหลือ : " . number_format($money12 - ($tax * $money12)) . " บาท  <br/>";
        echo "<br><a href='numeric.php'> back</a>";
    }
else
{
    echo "กรุณากรอกข้อมูล";
    echo "<br><a href='numeric.php'> back</a>";

}

    ?>
</body>

</html>