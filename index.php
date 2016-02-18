<?php

require_once('vendor/autoload.php');

use Shapes\Entities\CircleRepository;
use Shapes\Entities\SquareRepository;

// Get circles
$circleRepository = new CircleRepository();
$circles          = $circleRepository->getCircles();

// Get squares
$squareRepository = new SquareRepository();
$squares          = $squareRepository->getSquares();

// Get area for shapes
$areas = [];
foreach ($circles as $circle) {
    $areas[] = pi() * pow($circle->getRadius(), 2);
}

foreach ($squares as $square) {
    $areas[] = pow($square->getLength(), 2);
}

printf('<h1>Sum of the areas of provided shapes: %s</h1>', array_sum($areas));
