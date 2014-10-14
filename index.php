<?php


require_once "class/robot.php";
require_once "class/viewport.php";


$viewport = new Viewport();

$viewport->setDimention(array(5,5));
$viewport->createViewPort();


$robot = new Robot();

//$file = readfile("test/command.txt");

$robot->setPosition(array(4,0,'north'));
$viewport->setRobotPlace($robot);

echo $robot->printReport();



echo "<pre>";
print_r($robot->getPosition());
print_r($viewport->getViewPortData());
echo "</pre>";
