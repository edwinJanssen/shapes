<?php

require_once('vendor/autoload.php');

use Shapes\Entities\CircleRepository;
use Shapes\Entities\SquareRepository;
use Shapes\Services\AreaCalculator;
use Shapes\Services\AreaOutputter;

// Get circles
$circleRepository = new CircleRepository();
$circles          = $circleRepository->getCircles();

// Get squares
$squareRepository = new SquareRepository();
$squares          = $squareRepository->getSquares();

$areaCalculator = new AreaCalculator(array_merge($circles, $squares));
$areaOutputter  = new AreaOutputter($areaCalculator);

echo $areaOutputter->getHtml();
