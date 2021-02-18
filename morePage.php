<!DOCTYPE html>
<!-- ชื่อไฟล์ : SumNum.php -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Test </title>
</head>
</head>

<body>
    <?php

    function show_form()
    {
        echo '<form method="get" action="morePage.php" align=center>';
        echo '<tr><td>ประวัตินักศึกษา </td><br>';
        echo ' <td>ชื่อ-นามสกุล : </td>';
        echo ' <td><input type="text" name="name" size="15" value="" /> </td>';
        echo ' </tr>';
        echo ' <br>';
        echo ' <td>เพศ : </td>';
        echo ' <td><input type="radio" name="sex" value="ชาย">ชาย</td>';
        echo ' <input type="radio" name="sex" value="หญิง">หญิง';
        echo ' <br>';
        echo ' <td>สาขา : </td>';
        echo ' <td><input type="radio" name="type" value="IT">IT</td>';
        echo ' <td><input type="radio" name="type" value="ITI">ITI</td>';
        echo ' <br>';
        echo ' <td>เกรดเฉลี่ย : </td>';
        echo ' <td><input type="text" name="grade" size="15" value="" /> </td>';
        echo ' <tr>';
        echo ' <td colspan="2" align="center"><br>';
        echo ' <br><input type="submit" name="btn" value=" Send " />';
        echo ' <input type="reset" name="btn" value=" Clear " />';
        echo "<br>";
        echo ' <hr>';
        echo ' </td>';
        echo ' </tr>';
        echo ' </form>';
    }
    show_form();
    if (isset($_GET['btn'])) {
        $name = $_GET['name'];
        $grade = $_GET['grade'];
        echo "<form align=center>";
        echo "<br>";
        if (!empty($name)) {
            echo "ชื่อ-นามสกุล : <i> $name </i> <br/>";
            echo "<br>";
        }
        if (isset($_GET['sex'])) {
            $sexual = $_GET['sex'];
            echo "เพศ : <i> $sexual </i> <br/>";
            echo "<br>";
        }
        if (isset($_GET['type'])) {
            $type = $_GET['type'];
            echo "สาขา : <i> $type </i> <br/>";
            echo "<br>";
        }
        if (!empty($grade)) {
            echo "เกรดเฉลี่ย : <i> $grade </i> <br/>";
            echo "<br>";
        }
        
        echo "<a href='morePage.php'>back</a>";
        echo ' </form>';
    } else {
    }
    ?>

</body>

</html>