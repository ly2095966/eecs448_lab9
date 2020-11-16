<?php 
function atimesb($a, $b) {
    return ($a * $b);
}
echo "<table>";
for ($i = 0; $i <= 100; $i++)
{
    echo "<tr>";
        for($j = 0; $j <= 100; $j++)
        {
            if (($i==0) && ($j==0))
            {
                echo "<td><b>C/R </td>";
                continue;
            }
            if ($j==0) 
            {
                echo "<td><b>".$i."</td>";
            }
            else if ($i==0) 
            {
                echo "<td><b>".$j."</td>";
            }
            else 
            {
                echo "<td>".atimesb($i, $j)."</td>";
            }
        }
    echo "</tr>";
}
echo "</table>";
?>