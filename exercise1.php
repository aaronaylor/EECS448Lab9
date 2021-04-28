<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

function printTable($x,$y){
	echo "<tr>";
	printRow(1,$y);
	echo "</th>";
	for($x2 = 1; $x2 <= $x;$x2++){
		echo "<tr>";
		printRow($x2,$y);
		echo "</th>";
	}
	
}

function printRow($row, $col){
	echo "<th>";
	echo $row;
	echo "</th>";
	for($y2 = 1; $y2 <= $col; $y2++){
		echo "<th>";
		echo $y2 * $row;
		echo "</th>";
	}
}

echo "<table>";
printTable(100,100);
echo "</table>";
?>