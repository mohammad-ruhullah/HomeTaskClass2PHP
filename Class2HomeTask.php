<?php


	echo "If else: <br>";

	$dayNumber = 5;

	if($dayNumber == 1){
		echo "Saturday" . "<br>";
	}else if($dayNumber == 2){
		echo "Sunday" . "<br>";
	}elseif($dayNumber == 3){
		echo "Sunday" . "<br>";
	}else if($dayNumber == 4){
		echo "Monday" . "<br>";
	}else if($dayNumber == 5){
		echo "Tuesday" . "<br>";
	}else if($dayNumber == 6){
		echo "Wednesday" . "<br>";
	}else if($dayNumber == 7){
		echo "Thursuday" . "<br>";
	}else{
		echo "Wrong Day Number";
	}

	echo "<br> Switch : <br>";

	switch ($dayNumber) {
		case 1:
			echo "Saturday";
			break;
		case 2:
			echo "Sunday";
			break;
		case 3:
			echo "Monday";
			break;
		case 4:
			echo "Tuesday";
			break;
		case 5:
			echo "Wednesday";
			break;
		case 6:
			echo "Thursday";
			break;
		case 7:
			echo "Friday";
			break;
		
		default:
			echo "No Day";
			break;
	}


	echo "<br>";
	echo "Printing 1 to 10 using While loop" . "<br>";

	$count = 1;

	while ($count <= 10) {
		echo $count . "<br>";
		$count++;
	}

	echo "Printing 1 to 10 using do While loop" . "<br>";

	$count = 1;

	do{
		echo $count . "<br>";
		$count++;

	}while ($count <= 10);


	echo "<br>Example Of Nested If-Else : <br>";
	$userName = "ruhullah";
	$pass = "201048";

	if($userName == "ruhullah"){
		if($pass == "201048"){
			echo "Login Successfully..!";
		}else{
			echo "Wrong Pass..!";
		}

	}else{
		echo "Wrong UserName";
	}

	echo "<br>Example Of for loop : <br>";

	$num = array(1,2,3,4,5,6,7,8,9,10);

	echo "Array Element Count : " . count($num) . "<br>" . "All elements of array :" . "<br>";

	for ($i=0; $i < count($num) ; $i++) { 
		echo $num[$i] . " ";
	}

	echo "<br> foreach Loop : <br>";

	$contact = array("Ruhullah" => "0192452345", "Nurullah" => "0234234", "Ataullah" => "353452345");

	foreach($contact as $key => $value){
		echo $key ." ". $value ."<br>";
	}






?>