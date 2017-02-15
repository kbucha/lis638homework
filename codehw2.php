<!DOCTYPE html>
<html>
<head>
	<title> Homework #2 </title>
</head>

<body>
<h3>Keneil Buchanan</h3>
<p>Challenge 1: ISBN Validator</p>
<?php
//pick ISBN number
#0439708184
//function isbnVerify
	$isbn = "0439708184";
	#echo "$isbn";
	$isbnCheck = (10*0)+(9*4)+(8*3)+(7*9)+(6*7)+(5*0)+(4*8)+(3*1)+(2*8)+(1*4);
	#echo "$isbnCheck";
	/* For the longest time I could not figure out whether or not the variables go
	within the function, before, or after. I kept getting errors stating that
	my variables were undefined until I placed them within the function. Then it worked
	fine. Then when I removed it out of the function, it was still fine???*/
function isbnVerify($isbn, $isbnCheck) {
	
	if ($isbnCheck % 11 ==0) { #divisiblity test
		print "$isbn is Valid!";
	} else {
		print "$isbn is NOT Valid!";
	}
}
isbnVerify($isbn, $isbnCheck); 
?>
<p>Challenge 2: Coin Flip</p>
<?php
 //create value for HEADS using image
 $heads = '<img src="http://www.marshu.com/articles/images-website/articles/presidents-on-coins/quarter-coin-head.jpg" height="65" width="65"';
 $tails = '<img src="http://www.marshu.com/articles/images-website/articles/presidents-on-coins/quarter-coin-tail.jpg" height="65" width="65"';
 //create value for TAILS using image
 
 //function
 function coinFlip1 ($heads, $tails) {
 	if (mt_rand(0,1) == true) { 
 		print "$heads";
 	}	else {
 			print "$tails"; #need to make this loop but unsure how to place it in "for" loop.
 		}	
 }
 echo "Flipping coin 1 time </br>"; // Flipping coin once
 coinFlip1 ($heads, $tails);
 // Flip coin 3 times.
  echo "Flipping coin 3 times </br>";
 
 // Flip coin 5 times.
  echo "Flipping coin 5 times </br>";
 // Flip coin 7 times.
  echo "Flipping coin 7 times </br>";
 // Flip coin 9 times.
  echo "Flipping coin 9 times </br>";
 // Flip coin until two heads.

?>
</body>
</html>