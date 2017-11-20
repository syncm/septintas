<?php

$a = ['Jonas', 'Petras', 'Antanas', 'Povilas'];

for ($i = 0; $i < count($a)-1; $i++)
{
    for ($j = $i+1; $j <count($a); $j++)
    {
        echo $a[$i] . '=' . $a[$i] ."<br>";
    }
}
echo "<br>";

for ($i = 0; $i < count($a); $i++)
{
    for ($j = 0; $j <count($a); $j++)
    {
        if ($i != $j) {
        echo $a[$i] . '=' . $a[$i] ."<br>";
        }
    
    }
}


?>