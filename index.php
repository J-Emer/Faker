<?php

use Jemer\Faker\Factory;

require "vendor/autoload.php";

echo Factory::Paragraphs(4) . PHP_EOL;

var_dump(Factory::CityNames(7));




?>