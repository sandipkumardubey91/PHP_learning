<?php
$n = 2;
$i = 1;
echo "<table border = '1'>";
echo "<tr><th> Multiplication table </th></tr>";
    while($i <= 10 ){
        $res = $n * $i;
        echo "<tr><td>$n * $i = $res </td></tr>";
        $i++;
    }
    echo "</table>"
?>