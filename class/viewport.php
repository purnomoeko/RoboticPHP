<?php

class Viewport{
    
    private $viewPortData, $dimention;
    
    public function getViewPortData(){return $this->viewPortData;}
    public function setDimention($dimention=array(5,5)){$this->dimention = $dimention;}
    
    
    public function setRobotPlace($robot){
        $positionRobot = $robot->getPosition;
        $positionRobot[0] = $positionRobot[0] > $dimention[0] - 1 ?  $dimention[0] : $positionRobot[0];
        $positionRobot[1] = $positionRobot[1] > $dimention[1] - 1 ?  $dimention[1] : $positionRobot[1];
        $this->viewPortData[$positionRobot[0]][$positionRobot[1]] = $robot->name." - ".$positionRobot[2];
    }
    
    public function createViewPort(){
        $this->viewPortData = array();
        for($i=0; $i<$this->dimention[0]; $i++){
            for($x=0; $x<$this->dimention[1]; $x++){
               $this->viewPortData[$i][] = NULL;
            }
        }
    }
    
}