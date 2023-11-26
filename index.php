<?php
require_once __DIR__ . '/app/bootstrap.php';

// Image you need cover mode
$strategyMode = new \App\CalculateStrategy(new \App\CoverMode());
//Or for contain mode
// $strategyMode = new \App\CalculateStrategy(new \App\ContainMode());

$newDimensionB = $strategyMode->calculate(['width' => 250, 'height' => 500], ['width' => 500, 'height' => 90]);
echo 'width: '. $newDimensionB['width']. ', height: ' . $newDimensionB['height'];


