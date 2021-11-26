<?php

require __DIR__.'/../vendor/autoload.php';

use DavidIcube\HaloDunia;

$haloDunia = new HaloDunia();

echo $haloDunia->getMessage();