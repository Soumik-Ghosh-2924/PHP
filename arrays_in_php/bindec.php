<!DOCTYPE html>
<html>
<head>
    <title>Bin to Dec</title>
</head>
<body>
    <form action="bindec.php" method="get">
        <br>
        <br>
        Enter the number as per your choice: <br>
        <input type="text" name="n1" size=8>
        <br><br>
        Convert:
        <input type="submit" value="Click">
        <br>
        <br>
    </form>
    <?php
    
        $n = (int)$_GET['n1'];
        $a = array();
        $y = 0;
        while ($n > 0) {
            $a[$y] = $n % 2; // Corrected assignment
            $y++;
            $n = (int)($n / 2); // Corrected to ensure integer division
        }

        echo 'The binary form after conversion is: '."<br>";
        $l = count($a);

        for ($x = $l - 1; $x >= 0; $x--) {
            echo $a[$x] . ' ';
        }
    }
    ?>
</body>
</html>
