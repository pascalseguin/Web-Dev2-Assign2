<?php
header("Content-Type: application/json; charset=UTF-8");

require_once('../includes/db-helper.inc.php');
require_once('../includes/config.inc.php');
require_once('../includes/class-helper.inc.php');
require_once('../includes/recommend-helper.inc.php');


if (IsLoggedIn()) {

    $recommended = getRecommendedMovies($connection); #this will be the name of the function to create a list of recommendations

    $payload = new Payload(true, $recommended, null);
} else {
    $payload = new Payload(false, null, "Error getting list of recommendations");
}

$json = json_encode($payload);

echo $json;