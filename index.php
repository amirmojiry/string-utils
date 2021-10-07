<?php

require __DIR__.'/vendor/autoload.php';

use \Amirmojiry\StringUtils\Str;

var_dump (Str::contains('abcd', ['ab', 'x']));