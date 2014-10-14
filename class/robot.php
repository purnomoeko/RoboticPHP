<?php

class Robot{
    
    protected $position = array();
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
    
    
    function setPosition($position = array(0, 0, 'north')){
        $this->position = $position;
        
        $this->viewPortData[$position[0]][$position[1]]["robotDirection"] = $position[2];
    }

    
    function printReport($position = array()){
        return $position[0].", ".$position[1].",".$position[3];
    }
    
    function move($viewport){
        
    }
    
}