<DOCTYPE! html>
<head>
	<title>PHP Test</title>
</head>
<body>
	<center><h1>PHP Basics</h1></center>
<?php
//This file goes over the basics of PHP
//when making a php website, save with the .php extension
//the user can't see the php code because it runs on the server

//commands are not case sensitive, however variable names are
//HTML tags can be written in the ""

//My first PHP code
echo "Hello World <br />";

//display info
echo "This is echo <br />"; //mainly use echo

print "This is print <br />";

echo "<br />";

//variables
$variable = "This is a variable <br />"; //command for variable is $ and then you place your variable name
$numVar = 5;
$numVar2 = 3;
echo $numVar + $numVar2 . "<br />"; //Concatenation uses a . instead of a + 
//when calling the variable, you still use the $ at the beginning

echo "<br />";

//if elseif and else
$loggedIn = true;
if ($loggedIn == true) {
	echo "You are logged in <br />";
}
//an else if command is elseif(condition) {code}
else {
	echo "You are not logged in <br />";
}

echo "<br />";

//arrays
$food = array("Pizza", "Noodles", "Burgers");
print_r($food); //print_r() is a function mainly for printing arrays like this -> Array ( [0] => Pizza [1] => Noodles [2] => Burgers )
echo "<br />";
echo $food[2] . "<br />";

echo "<br />";

//loops
//exactly like Javascript 
for ($x = 1; $x <=10; $x++) { //for(set $var; set condition; what to do with $var after each loop)
	echo $x . "<br />";
}

$y = 1;
while ($y <= 5) { //while (condition)
	echo $y . "<br />";
	$y + 1;
}
//When I tried the while loop, the server never loaded the file.

//this helps in looping through arrays (this will run until all elements are looped)
foreach ($food as $foodNames) { //this is taking the food array and looping through the elements. it sets the current element as $foodNames
	echo $foodNames . ' '; //this prints the current element + a space
}

echo "<br />";
echo "<br />";

//switches
//if you have seen my jsSwitch repository, the PHP syntax is exacly the same
$computer = "Mac";
switch($computer) {
	case "Mac":
		echo "You like Macs" . "<br />";
		break;
		
	case "PC":
		echo "You like PCs" . "<br />";
		break;
		
	default:
		echo "You don't like computers" . "<br />";
		
}

echo "<br />";

//functions
/*function funcName(){
	code
}*/
function add($num1, $num2) {
	$num1;
	$num2;
	return $num1 + $num2;	
}
echo add(5, 7); //calls the function

?>

</body>
</html>
