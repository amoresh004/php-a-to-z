<?php
// php variable ***

// $ami = "Amresh";
// $tumi = "Roy";
// $number = 123;

// echo "Hello {$ami} {$tumi} \n";
// echo 'Hello' ." ".$ami;

// php constant variable ***

// define('PI', 3.1416);
// $task = 'Read';
// echo $task ."\n";
// $task = 'Write';
// $constant = 'constant';
// echo $task ."\n";
// echo "Your value is = ".PI. "\n";
// echo constant ('PI')."\n";
// echo "Your value is = {$constant('PI')}";

// php output print ***
/*
integer int 
Double / Float 
Boolean 
Null 
String 
Array 
Object 
Resource 
*/
// $name = "Amresh";
// $result = "Passed";
// $exam = "HSC";
// // printf("You are $result");
// printf("Congratulation $name, You are $result $exam" ."\n");
// printf("Congratulation %s, You are %s %s",strtoupper($name), $result, strrev($exam) ."\n");
// echo "Congratulation ".$name.", You are ".$result. " ".$exam."\n";
// echo "Congratulation {$name}, You are {$result} {$exam} \n";
// var_dump($name);

// $a = array(1, 2, array("a", "b", "c"));
// var_dump($a);

// $b = 3.1;
// $c = true;
// var_dump($b, $c);

// $b = array('a' => 'Amresh', 'b' => 'Banana', 'c' => array('b' => 'bolod', 'c' => 'chamar'));
// print_r($b);

// $c = array ('m' => 'monkey', 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
// $results = print_r($c, true); // $results now contains output from print_r

// php Calculation print ***

$number = 12;
// $result = $number - 20;
// $result = (30 - 5) / (10 -5);
$number += 30;
// $number++;
// $result++;
echo $number;
// echo $result;