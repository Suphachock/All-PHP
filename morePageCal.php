<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    $name = $_GET['name'];
    $sexual = $_GET['sex'];
    $grade = $_GET['grade'];
    echo "<p>";
    echo "<b>MorePageCal</b><br />";
    echo "<br>";
    echo "ชื่อ-นามสุกล : <i> $name </i> <br/>";
    echo "<br>";
    echo "เพศ : <i> $sexual </i> <br/>";
    echo "<br>";
    echo "<a href='morePage.php'> <big>Back </big></a>";
    
    ?>
</body>

</html>