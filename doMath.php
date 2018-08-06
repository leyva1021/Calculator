<?php
    
ini_set('display_errors', '1');
error_reporting(E_ALL | E_STRICT); 

echo "<link rel='stylesheet' type='text/css' href='calcstyle.css' />";

    $inputA = $_POST['inputA'];
    $inputB = $_POST['inputB'];
    $operation = $_POST['operation'];
    $answer = 0;


    if($operation == "addition"){ 
        $answer=$inputA + $inputB;
   		echo "<b><text-align: center;> $inputA + $inputB = $answer </b>";
    }

    elseif($operation == "subtract"){
        $answer=$inputA - $inputB;
    	echo "<b> $inputA - $inputB = $answer </b>";
    }

    elseif($operation == "multiply"){
        $answer=$inputA * $inputB;
    	echo "<b> $inputA * $inputB = $answer </b>";
    }

    elseif($operation == "division"){
        $answer=$inputA / $inputB;
    	echo "<b> $inputA / $inputB = $answer </b>";
    }

    elseif($operation == "modulus"){
        $answer=$inputA % $inputB;
    	echo "<b> $inputA % $inputB = $answer </b>";
    }

    echo "<br/>";
    echo "<br/>";
    echo "<b><a href='http://kahuna.clayton.edu/itfn2214-class/mmurdock/Calc/minicalc.html'>Let's try again!</a></b>";
?>