<?php

class Robot{
    
    protected $position = array(), $viewport;
    public $name = "robot";
    
    
    /*Class Constructor and define $viewPort dimentions
     *
     * for default viewport will be defined as x=5, y=5
     *
     * $dimention = array()
    */
    public function __construct($position = array(0, 0, 'north')){
        $this->position = $position;
    }
    
    
    
    /*Class Constructor and define $viewPort dimentions
     *
     * for default viewport will be defined as x=5, y=5
     *
     * $dimention = array()
    */
    function getPosition(){ return $this-> position;}
    
    
    /*Set viewport object where the robot placed
    $viewport = viewport object from class/viewport.php files
    */
    function setCurrentViewPort($viewport){
        $this->viewport = $viewport;
    }
    
    
    /*
    * Set current position of robot
    * $position = array data that collect coordinate information 
    */
    function setPosition($position = array(0, 0, 'north')){
        $this->position = $position;
        $this->position[2] = strtolower($position[2]);
        
    }

    /*
    * Print robot position information 
    */
    function printReport(){
        return $this->position[0].", ".$this->position[1].",".$this->position[2];
    }
    
    
    /*
    * Move the robot object based on current direction 
    */
    function move(){
        if(isset($this->viewport)){
            $direction = $this->position[2];
            
            if($direction == "north"){
                $this->position[0] = $this->position[0] + 1;
            }
            elseif($direction == "west"){
                $this->position[1] = $this->position[1] - 1;
            }
            elseif($direction == "east"){
                $this->position[1] = $this->position[1] + 1;
            }
            elseif($direction == "south"){
                $this->position[0] = $this->position[0] - 1;
            }
            
            $this->viewport->setRobotPlace($this);
        }
    }
    
    /*
    * Turn right the robot, so robot direction will change.
    */
    function turnRight(){
        $direction = $this->position[2];
        if($direction == "north"){
            $this->position[2] = "east";
        }
        elseif($direction == "west"){
            $this->position[2] = "north";
        }
        elseif($direction == "east"){
            $this->position[2] = "south";
        }
        elseif($direction == "south"){
            $this->position[2] = "west";
        }
        
        $this->viewport->setRobotPlace($this);
    }
    
    
    /*
    * Turn left the robot, so robot direction will change.
    */
    function turnLeft(){
        $direction = $this->position[2];
        if($direction == "north"){
            $this->position[2] = "west";
        }
        elseif($direction == "west"){
            $this->position[2] = "south";
        }
        elseif($direction == "east"){
            $this->position[2] = "north";
        }
        elseif($direction == "south"){
            print_r($direction);
            $this->position[2] = "east";
        }
        
        $this->viewport->setRobotPlace($this);
    }
    
    
}