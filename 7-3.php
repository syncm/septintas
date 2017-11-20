<?php



$a = [
[2 => 5,6],
[2,5,7],
[3=>6, 4=>12]
];

$sum =[];
foreach ($a as $eilute) {

    foreach($eilute as $stulpelis =>$reiksme)
    {
        if (isset($sum[$stulpelis])) {
            $sum[$stulpelis]+=$reiksme;
        }
        else {
            $sum[$stulpelis]=$reiksme;
        }

    }
}


var_dump($sum);