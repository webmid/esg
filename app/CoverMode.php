<?php
namespace App;

class CoverMode implements StrategyInterface
{

    public function calculate(array $imageA, array $imageB): array
    {

        $scaleFactor = max($imageA['width'] / $imageB['width'],  $imageA['height'] / $imageB['height']);

        // Calculate the new dimensions of imageB
        $newWidth = (int)($imageB['width'] * $scaleFactor);
        $newHeight = (int)($imageB['height'] * $scaleFactor);

        return ['width' => $newWidth, 'height' => $newHeight];
    }
}