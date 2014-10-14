<?php


require "class/robot.php";

$robot = new Robot(array(5,5));


$file = readfile("test/command.txt");

print_r($file);
echo "<pre>";
print_r($robot->getViewPortData());
echo "</pre>";
$robot->setPosition();
