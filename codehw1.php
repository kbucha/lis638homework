<!DOCTYPE html>
<html>

<head>
Homework #1
</head>
<body>
<?php
print "Challenge 1</br>";

	$change = 172;
	$dollar = 172 / 100;
	$quarter = 72 / 25;
	$dime = 12 / 10;
	$nickel = 0;
	$penny = 2;
	
	echo "You are due $change cents</br>";
	echo "Your change is: $dollar dollar, $quarter quarters, $dime dime, $nickel nickel and $penny pennies."


?>

<?php
	$beer = 99;
	$lyric1 = "bottles of beer on the wall,";
	$lyric2 = "bottles of beer,";
	$lyric3 = "take 1 down, pass it around-";
	
	print "<p>Challenge 2</p>";
	
  while ($beer > 0) {
  	$beer--; #in order to start from 99 and count downward from there.
    echo "$beer $lyric1 ";
    echo "$beer $lyric2 ";
    echo "$lyric3</br>";
    
	} 
	if($beer < 1) {
	echo "<p>No more beer is left on the wall!</p>";
	}


?>

</body>

</html>