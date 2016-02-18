<?php

require_once('vendor/autoload.php');

use Shapes\Entities\CircleRepository;
use Shapes\Entities\SquareRepository;
use Shapes\Services\AreaCalculator;

// Get circles
$circleRepository = new CircleRepository();
$circles          = $circleRepository->getCircles();

// Get squares
$squareRepository = new SquareRepository();
$squares          = $squareRepository->getSquares();

$areaCalculator = new AreaCalculator(array_merge($circles, $squares));

echo $areaCalculator->output();
