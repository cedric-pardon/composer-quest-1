<?php

require_once '../vendor/autoload.php';

use App\Wcs\Hello;

$hello = new App\Wcs\Hello;

echo $hello->talk();