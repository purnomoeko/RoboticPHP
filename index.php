<?php


require_once "class/robot.php";
require_once "class/viewport.php";


$viewport = new Viewport();

$viewport->setDimention(array(5,5));
$viewport->createViewPort();


$robot = new Robot();

$file = readfile("test/command.txt");

$robot->setPosition();
