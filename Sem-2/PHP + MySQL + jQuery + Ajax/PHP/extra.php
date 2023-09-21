<?php
    function darray($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    function br(){
        echo "<br>";
    }
    function hr(){
        echo "<hr>";
    }
	function randcolor(){
		$s = [0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f'];
		
		$h1 = rand(0, 15);
		$h2 = rand(0, 15);
		$h3 = rand(0, 15);
		$h4 = rand(0, 15);
		$h5 = rand(0, 15);
		$h6 = rand(0, 15);
		
		$colorcode = "#".$s[$h1].$s[$h2].$s[$h3].$s[$h4].$s[$h5].$s[$h6];
	}
	function checkimage($extension){
	    $extension = strtolower($extension);
		$allowed = ['png', 'jpg', 'jpeg', 'jfif'];
		if(in_array($extension, $allowed)){
			return true;
		}
		else{
			return false;
		}
	}
	function checkfilesize($originalsize){
		$fixsize = (1024 * 500); #512000 (kb) 
		if($fixsize > $originalsize){
			return true;
		}
		else{
			return false;
		}
	}
?>