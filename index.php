<?php

use Jemer\Faker\Factory;

require "vendor/autoload.php";

echo Factory::State_Abbreviated() . PHP_EOL;

var_dump(Factory::States_Abbreviated(7));




?>