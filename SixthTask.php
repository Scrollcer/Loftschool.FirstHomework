<?php
echo "<table>";
for ($i = 1; $i <10; $i++){
    echo "<tr>";
    for ($j = 1; $j <10; $j++){
        $result = $i*$j;
        echo "<td>$result</td>";
    }
    echo "</tr>";
}
echo "</table>";