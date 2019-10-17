<?php

$path = '/app/rottenoranges/';
$className = 'C';
$classNumber = '06';
$acc = 1;
$objName = 'Rotten-Orange';

$arrFiles = array_diff(scandir($path), array('.', '..'));

foreach ($arrFiles as $file) {
   
    if ($acc > 0 && $acc < 10) {
        $strAcc = '000' . $acc;
    } else if ($acc >= 10 && $acc < 100) {
        $strAcc = '00' . $acc;
    } else if ($acc >= 100 && $acc < 1000) {
        $strAcc = '0' . $acc;
    } else {
        $strAcc = $acc;
    }

    $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
    $newName = $className . $classNumber . '_' . $objName . '_' . $strAcc .'.' . $fileExtension;
    echo "\nRenomeando $file para $newName...";
    rename($path . $file, $path . $newName);
    $acc++;
}

echo "\n\nTerminou a execução!!";
