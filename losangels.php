<?php
function partOfNumber($percent, $number) {
    return $percent * $number;
}
function litersSpentByKilometers($litersSpentByHundredKilometers, $amountOfKilometers) {
    return $litersSpentByHundredKilometers * $amountOfKilometers;
}
$number = 4500;
$percent = 2 / 5;
$litersSpentByHundredKilometers = 50 / 100;
$distancebetweenYellowknifeVancouver = partOfNumber($percent, $number);
$amountOfKilometers = $number - $distancebetweenYellowknifeVancouver;
$litersSpentBetweenVancouverLosAngeles = litersSpentByKilometers($litersSpentByHundredKilometers, $amountOfKilometers);
echo PHP_EOL."The airplane spent; ".$litersSpentBetweenVancouverLosAngeles.PHP_EOL;