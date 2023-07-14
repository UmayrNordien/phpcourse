<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Course</title>
</head>
<body>
<div class="header">
    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>
</div>
</body>
</html>
<?php   
echo '<br>';

echo '<h2><pre>Welcome to the tutorial page (PHP Course)</pre></h2>';

echo '<br>';
echo '<hr>';



//The use of variables
echo '<h4>Variable:</h4>';
echo '<h5>Containers for storing infomation</h5>';
echo '<h6>OUTPUT:</h6>';

$str = "This is a string";
$num = 7;
$float = 6.9;

//Print the variable:

echo "$str";
//or
echo "<pre>" . $str . "</pre>";
echo "<pre>" . $num . "</pre>";
echo "<pre>" . $float . "</pre>";

echo '<hr>';




//Array
echo '<h4>Array:</h4>';
echo '<h5>An array stores multiple values in one single variable</h5>';
echo '<h6>OUTPUT:</h6>';

$laptop_brands = array("HP","Leno","Asus","Dell");
/* incorrect - The var_dump() function expects a variable as an argument, not an array. */
// echo var_dump("<pre>" . $laptop_brands . "</pre>");
echo var_dump($laptop_brands[3]);

echo '<hr>';




//Constant
echo '<h4>Constant:</h4>';
echo '<h5>Constants are like variables except that once they are defined they cannot be changed or undefined.</h5>';
echo '<h6>OUTPUT:</h6>';

define("laptops", ["Asus", "Dell", "Lenovo"]);
echo laptops[2]; //position is important

echo '<hr>';



//If Else 
echo '<h4>If Else:</h4>';
echo '<h5>statement - executes some code if a condition is true and another code if that condition is false</h5>';
echo '<h6>OUTPUT:</h6>';

$varif = 6;

if($varif > 9){
    echo ($varif); //if tht condition does not meet and theres no else nothing will print
} else {
    echo 'var is not greater than 9';
}

echo '<br>';

$varif2 = 6;

if($varif2 % 2 == 0 && $varif2 % 2.2 == 0){   //0 repesents the remainder (checks if there are no remainders and its a whole number)
    echo 'divisible by both';
} else {
    echo 'the condition did not meet';
}

echo '<hr>';



//Elseif
echo '<h4>Elseif</h4>';
echo '<h5>if...else statement - executes some code if a condition is true and another code if that condition is false</h5>';
echo '<h6>OUTPUT:</h6>';

$varelseif = 9;

if ($varelseif % 3 == 0 && $varelseif % 1 == 0){
    echo 'divisble by both';
} elseif ($varelseif % 3 == 0){
    echo 'divisible by 3';
} elseif ($varelseif % 1 == 0){
    echo 'divisible by 1';
} else {
    echo "not divisible by both";
}

echo '<hr>';
?>



<!-- Swicth -->
    <h4>Switch</h4>
    <h5>The switch statement is used to perform different actions based on different conditions</h5>
    <h6>OUTPUT:</h6>

	<form method="POST" action="tutorial.php" style="margin-bottom: 10px;">
		<label for="difficulty">Enter difficulty level:</label>
		<input type="number" id="difficulty" name="difficulty" min="1" max="5">
		<button type="submit">Submit</button>
	</form>
<?php

// $difficulty = 5;
$difficulty = $_POST['difficulty'];

switch ($difficulty){
    case 1: 
        echo 'you are playing on <span class="lvl">CAN I PLAY, DADDY?</span> difficulty';
        break;
    case 2: 
        echo 'you are playing on <span class="lvl">DONT HURT ME</span> difficulty';
        break;
    case 3: 
        echo 'you are playing on <span class="lvl">BRING EM ON!</span> difficulty';
        break;
    case 4: 
        echo 'you are playing on <span class="lvl">I AM DEATH INCARNATE!</span> difficulty';
        break;
    case 5: 
        echo 'you are playing on <span class="lvl">ÜBER</span> difficulty';
        break;
    default:            // if no case constant-expression value is equal to the value of expression
        echo 'Invalid Input';
}
?>
<?php
echo '<hr>';
//While Loop
echo '<h4>While Loop</h4>';
echo '<h5>loops through a block of code as long as the specified condition is true</h5>';
echo '<h6>OUTPUT:</h6>';

$varwhile = 7;

while($varwhile <= 10){
    echo "Number: $varwhile <br>";  //must be in "";
    $varwhile ++;
}

echo '<hr>';



//Do While Loop
echo '<h4>Do While Loop</h4>';
echo '<h5>The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true</h5>';
echo '<h6>OUTPUT:</h6>';


$vardowhile = 9;

do{
    echo "Number: $vardowhile <br>";
    $vardowhile ++;
} while($varwhile <= 8);

echo '<hr>';
?>
<style>
    *{
        background-color: #353535;
        color: white;
        /* font-size: large; */
        scroll-behavior: smooth;
        cursor: crosshair;
    }
    /* scroll */
    ::-webkit-scrollbar {
    height: 20px;
    }

    ::-webkit-scrollbar-track {
    background-color: #151515;
    }

    ::-webkit-scrollbar-thumb {
    background-color: #252525;
    opacity: 1;
    background: repeating-linear-gradient( 45deg, #ff0000, #ff0000 6.5px, #252525 6.5px, #252525 32.5px );    
    }

    ::-webkit-scrollbar-thumb:hover {
    background-color: #252525;
    opacity: 1;
    background: repeating-linear-gradient( 45deg, #ff0000, #ff0000 6.5px, #252525 6.5px, #252525 32.5px );
    }
    h2{
        color: white;
        width: fit-content;
        text-decoration: underline overline line-through 1px dotted red;
    }
    h4{
        color: red;
        border: 1px dotted white;
        text-decoration: line-through 1px dotted white;
        width: fit-content;
    }
    h5{
        text-decoration: underline overline 1px dotted white;
    }
    h6{
        color: white;
        background-color: #151515;
        width: fit-content;
    }
    hr{
        border: 1px dotted white;
    }
    .lvl{
        font-size: 16px;
        color: red;
        background-color: white;
    }
    /* Progress Bar */
    .header {
    position: fixed;
    top: 0;
    z-index: 1;
    width: 100%;
    background-color: #f1f1f1;
    }
    /* The progress container*/
    .progress-container {
    width: 100%;
    height: 15px;
    background: #151515;
    }
    /* The progress bar*/
    .progress-bar {
    height: 15px;
    background-color: #252525;
    opacity: 1;
    background: repeating-linear-gradient( 45deg, #ff0000, #ff0000 6.5px, #252525 6.5px, #252525 32.5px );    
    }
</style>
<script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    function myFunction() {
    var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";
    }

</script>
