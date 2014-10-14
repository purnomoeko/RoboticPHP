<?php

header("Content-Type: text");
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
                echo $robot->printReport()."\n";
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




if(isset($_GET['detail'])){
    $viewportdata = $viewport->getViewPortData();
    
    for($x = 0; $x < count($viewportdata) ; $x++ ){
        for($y=0;$y < count($viewportdata[$x]); $y++){
            echo $viewportdata[$x][$y]."\n('$x','$y')\t\t";
        }
        echo "\n\n";
        
    }
}


