<?php
require_once "viewport.php";
class Robot{
    
    protected $position = array();
    private $viewPort;
    
    /*Class Constructor and define $viewPort dimentions
     *
     * for default viewport will be defined as x=5, y=5
     *
     * $dimention = array()
    */
    public function __construct($dimention = array(5,5)){
        $this->viewPort = new viewport($dimention);
        $this->viewPort->createViewPort();
    }
    
    function getPosition(){ return $position;}
    function getViewPort() {return $viewPort;}
    
    
    
    function setPosition($position = array(0, 0, 'north')){
        $this->position = $position;
        
        $this->viewPortData[$position[0]][$position[1]]["robotDirection"] = $position[2];
    }
    
    function move(){
        
    }
    
    
    function printReport($position = array()){
        return $position[0].", ".$position[1].",".$position[3];
    }

    
    
   
    
}