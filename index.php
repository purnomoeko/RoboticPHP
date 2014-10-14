<?php


require_once "class/robot.php";
require_once "class/viewport.php";


$viewport = new Viewport();

$viewport->setDimention(array(5,5));
$viewport->createViewPort();


$robot = new Robot();

$handle = fopen("test/command.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $lineSpaceBreak = explode(" ", $line);
        if(count($lineSpaceBreak) == 1){
                
            if(trim($lineSpaceBreak[0]) == 'MOVE'){
                $robot->move();
            }
            elseif(trim($lineSpaceBreak[0]) == "LEFT"){
                $robot->turnLeft();
                
            }
            elseif(trim($lineSpaceBreak[0]) == "RIGHT"){
                $robot->turnRight();
                
            }
            elseif(trim($lineSpaceBreak[0]) == "REPORT"){
                echo $robot->printReport()."<br />";
            }
        }
        else if(count($lineSpaceBreak) > 1){
            if($lineSpaceBreak[0] == "PLACE"){
                $params = explode(",", $lineSpaceBreak[1]);
                $robot->setPosition($params);
                $viewport->setRobotPlace($robot);
            }
        }
    }
} else {
    echo "ERROR OPEN FILE COMMAND!";
} 
fclose($handle);







echo "<pre>";
print_r($robot->getPosition());
print_r($viewport->getViewPortData());
echo "</pre>";
