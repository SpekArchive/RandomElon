<?php

$quotes = require('data.php');


var_dump(
    $quotes[mt_rand(0, count($quotes)-1)]
);