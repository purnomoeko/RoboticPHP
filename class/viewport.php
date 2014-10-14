<?php

class Viewport{
    
    private $viewPortData, $dimention;
    
    public function getViewPortData(){return $this->viewPortData;}
    public function setDimention($dimention=array(5,5)){$this->dimention = $dimention;}
    
    /*
    * Set place where position of robot
    * $robot = Robot Object
    */
    public function setRobotPlace($robot){
        $positionRobot = $robot->getPosition();
        
        $positionRobot[0] = $positionRobot[0] > $this->dimention[0] - 2 ?  $this->dimention[0] - 1 : $positionRobot[0];
        
        $positionRobot[0] = $positionRobot[0] < 0 ?  0 : $positionRobot[0];
        
        
        $positionRobot[1] = $positionRobot[1] > $this->dimention[1] - 2?  $this->dimention[1] - 1: $positionRobot[1];
        $positionRobot[1] = $positionRobot[1] < 0 ?  0 : $positionRobot[1];
        
        $robot->setPosition($positionRobot);
        $this->createViewPort();
        
        $this->viewPortData[$positionRobot[0]][$positionRobot[1]] = $robot->name." - ".$positionRobot[2];
        $robot->setCurrentViewPort($this);
    }
    
    
    /*
     * Create or resetting a Viewport
    */
    public function createViewPort(){
        $this->viewPortData = array();
        for($i=0; $i<$this->dimention[0]; $i++){
            for($x=0; $x<$this->dimention[1]; $x++){
               $this->viewPortData[$i][] = NULL;
            }
        }
    }
    
}