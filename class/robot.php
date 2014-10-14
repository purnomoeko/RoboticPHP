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
    
    function getPosition(){ return $this-> position;}
    function setCurrentViewPort($viewport){
        $this->viewport = $viewport;
    }
    
    function setPosition($position = array(0, 0, 'north')){
        $this->position = $position;
        $this->position[2] = strtolower($position[2]);
        
    }

    
    function printReport($position = array()){
        return $this->position[0].", ".$this->position[1].",".$this->position[2];
    }
    
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