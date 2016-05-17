<?php

require_once('nest.class.php');

// Your Nest username and password.
define('USERNAME', 'you@gmail.com');
define('PASSWORD', 'Something other than 1234 right?');

$nest = new Nest();

// Get the device information:
$infos = $nest->getDeviceInfo();


// Print the current temperature
printf("Current temperature: %.02f degrees %s\n", $infos->current_state->temperature, $infos->scale);
