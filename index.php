<?php

include('vendor/adodb/adodb-php/adodb.inc.php');

// setup db connection
$db = ADONewConnection('mysqli');
$db->SetFetchMode(ADODB_FETCH_ASSOC);
$db->NConnect(
    'localhost',
    'root',
    '',
    'shapes'
);
if (!$db->IsConnected()) {
    die("Cannot connect to shapes database, please warn the administrator");
}
$db->Execute("SET NAMES 'utf8'");
$db->debug = (isset($_GET['debug']) && 1 == $_GET['debug']);

// Get circles
$radii = [];
$sql = 'SELECT id, radius
        FROM circle;';
$rst = $db->Execute($sql);
if($rst && !$rst->EOF){
    while(!$rst->EOF){
        $radii[] = $rst->fields['radius'];
        $rst->moveNext();
    }
}

// Get squares lengths
$lengths = [];
$sql = 'SELECT id, length
        FROM square;';
$rst = $db->Execute($sql);
if($rst && !$rst->EOF){
    while(!$rst->EOF){
        $lengths[] = $rst->fields['length'];
        $rst->moveNext();
    }
}

// Get area for shapes
$areas = [];
foreach ($radii as $radius) {
    $areas[] = pi() * pow($radius, 2);
}

foreach ($lengths as $length) {
    $areas[] = pow($length, 2);
}

printf('<h1>Sum of the areas of provided shapes: %s</h1>', array_sum($areas));
