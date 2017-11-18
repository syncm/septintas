<?php 


$a = array('Jonas', 'Petras', 'Antanas', 'Povilas');
$i = 1;
$s = count($a);



echo "1.", "<br> <br>";

for ($i; $i < $s; $i++)
{
echo "-",$a[0]," ", $a[$i], "<br> <br>";
}
$i = 2;
for ($i; $i < $s; $i++)
{
echo "-",$a[1]," ", $a[$i], "<br> <br>";
}

echo "2.", "<br> <br>";
$i = 1;
for ($i; $i < $s; $i++)
{
echo "-",$a[0]," ", $a[$i], "<br> <br>";
}
$i = 0;
for ($i; $i < $s; $i++)
{


if ($a[$i] =='Petras')
{

}
else
echo "-",$a[1]," ", $a[$i], "<br> <br>";

}

$i = 0;
for ($i; $i < $s; $i++)
{


if ($a[$i] =='Antanas')
{

}
else
echo "-",$a[2]," ", $a[$i], "<br> <br>";



}


$i = 0;
for ($i; $i < $s; $i++)
{


if ($a[$i] =='Povilas')
{

}
else
echo "-",$a[3]," ", $a[$i], "<br> <br>";

}




?>