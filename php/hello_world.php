<?php

class PrintString{
	
    var $display_strings; 
    function __construct(){
         $this->display_strings = array();    
    }
	function insert_string($str){
		array_push($this->display_strings, $str);
	}

	function display_string($index){
		echo $this->display_strings[$index];
	}  
}

$hello_world_obj = new PrintString;
$hello_world_obj->insert_string("Hello World!");
$hello_world_obj->display_string(0);

?>