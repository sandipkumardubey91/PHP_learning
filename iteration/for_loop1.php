<?php
$n = 2;
echo "<table border = '1'>";
echo "<tr><th> Multiplication table </th></tr>";
    for($i = 1; $i<=10; $i++){
        $res = $n * $i;
        echo "<tr><td>$n * $i = $res </td></tr>";
    }
echo "</table>"
?>