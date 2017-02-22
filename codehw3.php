<!DOCTYPE html>
<html>
<head>

</head>

<body>
<p>Challenge 1: Book Lists</p>

<?php

//Create MD array for each item.
/* $bookdata = array(
			array("Title"=>"PHP and MySQL Web Development",
				"First"=>"Luke",
				"Last"=>"Welling",
				"Number of Pages"=>"144",
				"Type"=>"Paperback",
				"Price"=>"41.23"),
			array("Title"=>"PHP Cookbook: Solutions & Examples for PHP Programmers",
				"First"=>"David",
				"Last"=>"Sklar",
				"Number of Pages"=>"14",
				"Type"=>"Paperback",
				"Price"=>"40.88"),
			array("Title"=>"JavaScript and JQuery: Interactive Front-End Web Development",
				"First"=>"John",
				"Last"=>"Duckett",
				"Number of Pages"=>"251",
				"Type"=>"Paperback",
				"Price"=>"22.09"),
			array("Title"=>"Modern PHP: New Features and Good Practices",
				"First"=>"Josh",
				"Last"=>"Lockhart",
				"Number of Pages"=>"7",
				"Type"=>"Paperback",
				"Price"=>"28.49"),
			array("Title"=>"Programming PHP",
				"First"=>"Kevin",
				"Last"=>"Tatroe",
				"Number of Pages"=>"26",
				"Type"=>"Paperback",
				"Price"=>"28.96"),
			); */
			
$bookdata = array(
			array("PHP and MySQL Web Development",
				"Luke",
				"Welling",
				"144",
				"Paperback",
				"41.23"),
			array("PHP Cookbook: Solutions & Examples for PHP Programmers",
				"David",
				"Sklar",
				"14",
				"Paperback",
				"40.88"),
			array("JavaScript and JQuery: Interactive Front-End Web Development",
				"John",
				"Duckett",
				"251",
				"Paperback",
				"22.09"),
			array("Modern PHP: New Features and Good Practices",
				"Josh",
				"Lockhart",
				"7",
				"Paperback",
				"28.49"),
			array("Programming PHP",
				"Kevin",
				"Tatroe",
				"26",
				"Paperback",
				"28.96"),
			);
			
echo '<table border="1">';
echo '<tr><th>Title</th><th>First</th><th>Last</th><th>Number of Pages</th><th>Type</th><th>Price</th></tr>'; //In order to create headings
foreach( $bookdata as $bookdata ) //Why do we have to repeat $array as $array?
{
    echo '<tr>';
    foreach( $bookdata as $key )
    {
        echo '<td>'.$key.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
	//Remember to include TOTAL somewhere...		
#print_r($bookdata);
//print MD Array as Table





?>
<p>Challenge 2: Coin Toss, Continued</p>
<?php
 
/* for ($count = 0; $count<3; ++$count) {
	if (mt_rand(0,1) == 1) {
		print "$heads";
}   else {
		print "$tails";
}
} */

function coinFlip($headsInRow) {
	// create balue for HEADS
	$heads = '<img src="http://www.marshu.com/articles/images-website/articles/presidents-on-coins/quarter-coin-head.jpg" height="65" width="65">';
	//create value for TAILS
	$tails = '<img src="http://www.marshu.com/articles/images-website/articles/presidents-on-coins/quarter-coin-tail.jpg" height="65" width="65">';
	//create counters
	$headCount = 0;
	$flipCount = 0;

	echo "<p>Beginning the coin flipping, looking for $headsInRow in a row...</p>";
       
	// use while loop      
	while ($headCount < $headsInRow) {
    	$flip = mt_rand(0,1); //random heads,tails
    	++$flipCount; //in order to keep the count incrementing
			if ($flip == 0) {
    			echo $heads; //if heads print HEADS IMAGE and COUNT
    			++$headCount;
	} 		else {
    			echo $tails; //else print TAILS and restart heads counter.
    			$headCount = 0;
    }
}
    echo "<p>You flipped $headsInRow heads in a row in $flipCount flips!</p>";
}
            
            echo coinFlip(8);


?>

</body>

</html>