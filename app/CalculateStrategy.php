<?php
namespace App;
class CalculateStrategy
{
    public StrategyInterface $mode;
    public function __construct(StrategyInterface $mode)
    {
        $this->mode = $mode;
    }

    public function calculate(array $imageA, array $imageB): array
    {
       return $this->mode->calculate($imageA, $imageB);
    }
}