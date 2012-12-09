<?php
/*

This code evaluates a propositional equation that has 4 propositional variables

The code can get a bit tricky when the equation is complicated

*/


	$arrayP = array('t','t','t','t','t','t','t','t','f','f','f','f','f','f','f','f');
	$arrayNotP = array('f','f','f','f','f','f','f','f','t','t','t','t','t','t','t','t');

	$arrayQ = array('t','t','t','t','f','f','f','f','t','t','t','t','f','f','f','f');
	$arrayNotQ = array('f','f','f','f','t','t','t','t','f','f','f','f','t','t','t','t');

	$arrayR = array('t','t', 'f','f','t','t','f','f','t','t','f','f','t','t','f','f');
	$arrayNotR = array('f','f','t','t','f','f','t','t','f','f','t','t','f','f','t','t');
	
	$arrayS = array('t','f','t','f','t','f','t','f','t','f', 't','f','t','f','t','f');
	$arrayNotS = array('f','t','f','t','f','t','f','t','f','t','f','t','f','t','f','t');
	
	$arrayRes = array();
	
/*
Start

Code to be changes is between start and end comments

Explanation:
$isA = logical operator AND
$isB = logical operator OR inclusive
$isC = logical operator XOR (exclusive OR)
$isD = logical operator IMPLIES
$isE = logical operator Biconditional
$isF = logical operator NOT

Lets take the proposition P implies ( Q biconditional (R or S))
The first thing here to evaluate is R or S so I have set the First Evaluation so that it evaluates this.
The second evaluation is Q bicondition [first evaluation] which I have set the Second Evaluation to evaluate this.
The final thing to evaluate is P implies [second evaluation] which I have set the Final Evaluation to evaluate this.

The program prints out a table with the values of P Q R S X  where x is the result
*/	
	
		//Change here for first evaluation
		$P = $arrayR;
		$isA = false;
		$isB = true;
		$isC = false;
		$isD = false;
		$isE = false;
		$isF = false;		
		$Q = $arrayS;
		

	$First_evaluation = equate($P, $Q, $isA,$isB,$isC,$isD,$isE, $isF);
	
		// change here for second evaluation
		$P = $arrayQ;
		$isA = false;
		$isB = false;
		$isC = false;
		$isD = false;
		$isE = true;
		$isF = false;
		$Q = $First_evaluation;


	$Second_evaluation = equate($P, $Q, $isA,$isB,$isC,$isD,$isE, $isF);

		// change here for final evaluation
		$P = $arrayP;
		$isA = false;
		$isB = false;
		$isC = false;
		$isD = true;
		$isE = false;	
		$isF = false;
		$Q = $Second_evaluation;
		
	$Final_evaluation = equate($P, $Q, $isA,$isB,$isC,$isD,$isE, $isF);

/*


End do not change code below this comment. Unless you know what you are doing.

*/



	echo "P  Q  R  S  X \n";
	for ($i = 0; $i < 16; $i++) {
		echo $arrayP[$i]."  ".$arrayQ[$i]."  ".$arrayR[$i]."  ".$arrayS[$i]."  ".$Final_evaluation[$i]."\n";
	}
	
	
	
	
	
	function equate($P, $Q, $isA,$isB,$isC,$isD,$isE) {
		

	$ArrayP_size = count($arrayP);

	if($isA !== false ){

		//$arrayResult = array('t','t','f','f','f','f','f','f');
		//$c1 = 't';
		//$c2 = 't';
		
		for ($i=0;$i<16;$i++){
			
			$arrayRes[] = theAnd($P[$i], $Q[$i]); //saves that result so this can then be used for the next part
	//echo theAnd($arrayP[$i], $arrayQ[$i]);
			
		}
		return $arrayRes;
	//var_dump($arrayRes);
	}
	else if ($isB !== false){


		for ($i=0;$i<16;$i++){

	//echo theOr($arrayP[$i], $arrayQ[$i]);
			$arrayRes[] =  theOr($P[$i], $Q[$i]);
		}

	return $arrayRes;

	}
	else if ($isC !== false){


	for ($i=0;$i<16;$i++){

	$arrayRes[] = theXor($P[$i], $Q[$i]);
	}
	return $arrayRes;
	}
	else if ($isD !== false){


	for ($i=0;$i<16;$i++){

	//echo theImp($arrayP[$i], $arrayQ[$i]);
	$arrayRes[] = theImp($P[$i], $Q[$i]);

	}
	return $arrayRes;
	}
	else if ($isE !== false){


	for ($i=0;$i<16;$i++){

	$arrayRes[] =  theBic($P[$i], $Q[$i]);
	}
	return $arrayRes;
	}
	else if($isF !== false){
	for ($i=0;$i<16;$i++){

	$arrayRes[] =  theNot($P[$i]);
	}
	return $arrayRes;	
	}
	}

	function theAnd($compare1, $compare2){

		
		if($compare1 === 't' && $compare2 === 't'){
			// t and t are true
				return "t";
				

		}else if ($compare1 === 't' && $compare2 === 'f'){
			// t and f are false
				return "f";

		}
		else if ($compare1 === 'f' && $compare2 === 't'){
			//f and t are false 
				return "f";

		}
		else if ($compare1 === 'f' && $compare2 === 'f'){
			//f and f are false 
				return "f";


		}



	}

	function theOr($compare1, $compare2){
		if($compare1 === 't' && $compare2 === 't'){
			// t or t are true
				return "t";
				

		}else if ($compare1 === 't' && $compare2 === 'f'){
			// t or f are false
				return "t";

		}
		else if ($compare1 === 'f' && $compare2 === 't'){
			//f or t are false 
				return "t";

		}
		else if ($compare1 === 'f' && $compare2 === 'f'){
			//f or f are false 
				return "f";


		}



	}

	function theXOr($compare1, $compare2){
		if($compare1 === 't' && $compare2 === 't'){
			// t xor t are true
				return "f";
				

		}else if ($compare1 === 't' && $compare2 === 'f'){
			// t xor f are false
				return "t";

		}
		else if ($compare1 === 'f' && $compare2 === 't'){
			//f xor t are false 
				return "t";

		}
		else if ($compare1 === 'f' && $compare2 === 'f'){
			//f xor f are false 
				return "f";


		}


	}

	function theImp($compare1, $compare2){
		if($compare1 === 't' && $compare2 === 't'){
			// t imp t are true
				return "t";
				

		}else if ($compare1 === 't' && $compare2 === 'f'){
			// t imp f are false
				return "f";

		}
		else if ($compare1 === 'f' && $compare2 === 't'){
			//f imp t are false 
				return "t";

		}
		else if ($compare1 === 'f' && $compare2 === 'f'){
			//f imp f are false 
				return "t";


		}

	}

	function theBic($compare1, $compare2){
		if($compare1 === 't' && $compare2 === 't'){
			// t bicon t are true
				return "t";
				

		}else if ($compare1 === 't' && $compare2 === 'f'){
			// t bicon f are false
				return "f";

		}
		else if ($compare1 === 'f' && $compare2 === 't'){
			//f bicon t are false 
				return "f";

		}
		else if ($compare1 === 'f' && $compare2 === 'f'){
			//f bicon f are false 
				return "t";


		}

	function theNot($compare1){
		if($compare1 === 't'){
			// t bicon t are true
				return "f";
				

		}else if ($compare1 === 'f'){
			// t bicon f are false
				return "t";

		}
		
		
	}
}
?>