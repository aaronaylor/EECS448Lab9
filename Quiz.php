<?php

$count = 0;
echo "Question 1: What is 2+5?<br>";
echo "Your Answer: " . $_POST["Question1"] . "<br>";
echo "Correct Answer: 7<br><br>";
if($_POST["Question1"] == "7")
{
	$count++;
}

echo "Question 2: What is 6*3?<br>";
echo "Your Answer: " . $_POST["Question2"] . "<br>";
echo "Correct Answer: 18<br><br>";
if($_POST["Question2"] == "18")
{
	$count++;
}

echo "Question 3: What is 48/12?<br>";
echo "Your Answer: " . $_POST["Question3"] . "<br>";
echo "Correct Answer: 4<br><br>";
if($_POST["Question3"] == "4")
{
	$count++;
}

echo "Question 4: What is (5-2)*4<br>";
echo "Your Answer: " . $_POST["Question4"] . "<br>";
echo "Correct Answer: 12<br><br>";
if($_POST["Question4"] == "12")
{
	$count++;
}

echo "Question 5: What is ((3*5)+(9*5))/12<br>";
echo "Your Answer: " . $_POST["Question5"] . "<br>";
echo "Correct Answer: 5<br><br>";
if($_POST["Question5"] == "5")
{
	$count++;
}

echo "You got " . $count . " correct!<br>";
echo "That is " . ($count/5)*100 . " percent";
?>