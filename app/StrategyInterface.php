<?php
namespace App;

interface StrategyInterface
{
    public function calculate(array $imageA, array $imageB);
}