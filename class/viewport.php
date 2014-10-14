<?php

class viewport{
    
    private $viewPortData, $dimention;
    
    function getViewPortData(){return $this->viewPortData;}
    function setDimention($dimention=array(5,5)){$this->$dimention = $dimention;}
    
    public function createViewPort(){
        $this->viewPortData = array();
        for($i=0; $i<$this->dimention[0]; $i++){
            for($x=0; $x<$this->dimention[1]; $x++){
               $this->viewPortData[$i][] = array("pos" => "$i,$x", "robotDirection" => NULL);
            }
        }
    }
}