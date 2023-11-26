<?php
namespace App;

class ContainMode implements StrategyInterface
{

    public function calculate(array $imageA, array $imageB): array
    {
        $scaleFactor = min($imageA['width'] / $imageB['width'],  $imageA['height'] / $imageB['height']);

        $newWidth = (int)($imageB['width'] * $scaleFactor);
        $newHeight = (int)($imageB['height'] * $scaleFactor);

        return ['width' => $newWidth, 'height' => $newHeight];
    }
}