<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$super = $trinity = $rope = $son = $boomerang = "";

	$super = $_POST["super"];
	$trinity = $_POST["trinity"];
	$rope = $_POST["rope"];
	$son = $_POST["son"];
	$boomerang = $_POST["boomerang"];

	$correct = 0;

	echo "Question 1: What is Superman's original name, the one he was born with?<br>";
	echo "You answered: " . $super . "<br>";
	echo "The correct answer was: Kal'el<br><br>";
	if ($super == "Kal'el") {
		$correct = ++$correct;
	}

	echo "Question 2: Three DC comics superheroes are part of the Holy Trinity. Who are the Three?<br>";
	echo "You answered: " . $trinity . "<br>";
	echo "The correct answer was: Batman,Wonder Woman,Superman<br><br>";
	if ($trinity == "Batman,Wonder Woman,Superman") {
		$correct = ++$correct;
	}

	echo "Question 3: Wonder Woman carries around a rope that she uses to compel anyone caught in its grip to be honest. What is it called?<br>";
	echo "You answered: " . $rope . "<br>";
	echo "The correct answer was: Lasso of Truth<br><br>";
	if ($rope == "Lasso of Truth") {
		$correct = ++$correct;
	}

	echo "Question 4: In the 1987 graphic novel, \"Batman: Son of the Demon,\" we learn that Batman has a son with Talia al Ghul. What is his name?<br>";
	echo "You answered: " . $son . "<br>";
	echo "The correct answer was: Damian<br><br>";
	if ($son == "Damian") {
		$correct = ++$correct;
	}

	echo "Question 5: In the movie \"Suicide Squad,\" we are introduced to Captain Boomerang. How many versions of the character was there in the comics?<br>";
	echo "You answered: " . $boomerang . "<br>";
	echo "The correct answer was: 2<br><br>";
	if ($boomerang == "2") {
		$correct = ++$correct;
	}

	echo "You got " . $correct . " correct out of 5.<br>";
	echo "Your score is: " . ($correct / 5) * 100 . "%.";
?>