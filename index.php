<?php
// php variable ***

// $ami = "Amresh";
// $tumi = "Roy";
// $number = 123;

// echo "Hello {$ami} {$tumi} \n";
// echo 'Hello' ." ".$ami;

// php constant variable ***

define('PI', 3.1416);
$task = 'Read';
echo $task ."\n";
$task = 'Write';
$constant = 'constant';
echo $task ."\n";
echo "Your value is = ".PI. "\n";
echo constant ('PI')."\n";
echo "Your value is = {$constant('PI')}";