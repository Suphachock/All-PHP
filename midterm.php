<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


</head>

<body>

    <form method="$_GET" action="midterm.php">
        <table border="0" align="center" width="300">
            <tr>
                <td>ค่าเริ่มต้น :</td>
                <td>
                    <input type="number" name="first">
                </td>

            </tr>

            <tr>
                <td>ค่าสุดท้าย :</td>
                <td>
                    <input type="number" name="second">
                </td>

            </tr>

            <tr>
                <td>ตัวเลขที่นำไปหาร :</td>
                <td>
                    <input type="number" name="op">
                </td>

            </tr>

            <tr>
                <td colspan="1" align="left">
                    <input name="BtnSubmit" type="submit" value="Check Num">
                </td>

            </tr>

        </table>
    </form>

    <?php

    function checkNum()
    {
        $num1 = $_GET['first'];
        $num2 = $_GET['second'];
        $num3 = $_GET['op'];
        $count = 0;
        for ($a1 = $num1; $a1 <= $num2; $a1++) {
            if ($a1 % $num3 == 0) {
                $shownum = 0;
                $count += 1;
                $shownum += $a1;
                echo $shownum .",";
            }
           
        }
        echo "<br>";

    }

    function countNum()
    {
        $num1 = $_GET['first'];
        $num2 = $_GET['second'];
        $num3 = $_GET['op'];
        $total = 0;
        for ($a1 = $num1; $a1 <= $num2; $a1++) {
            if ($a1 % $num3 == 0) {
                $total += 1;
            }
        }

        echo "จำนวนที่หารลงตัว" . $total . "ตัว";
        echo "<br>";
    }

    function sumNum()
    {
        $num1 = $_GET['first'];
        $num2 = $_GET['second'];
        $num3 = $_GET['op'];
        $count = 0;
        for ($a1 = $num1; $a1 <= $num2; $a1++) {
            if ($a1 % $num3 == 0) {
                $count += $a1;
            }
        }

        echo "ผลรวม =" . $count ;
  
    }


    if (isset($_GET['BtnSubmit'])) {
        echo "<form align=center>";
        checkNum();
        echo "<br>";
        countNum();
        echo "<br>";
        sumNum();
        echo "<br>";
        echo "<br>";
        echo "<a href='midterm.php'>back</a>";
        echo ' </form>';
    }
    ?>

</body>

</html>