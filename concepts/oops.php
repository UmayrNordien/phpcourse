<html>
<title>PHP OOPS</title>
<body>
<div class="header">
    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>
</div>
</html>
<?php
echo '<br>';
echo '<a href="./tutorial.php"><button>PREVIOUS</button></a>';
echo ' tutorial';
echo '<br>';

echo '<h2><pre>OOPS in PHP</pre></h2>';

echo '<br>';
echo '<hr>';



//Defining Classes
echo '<h4>Classes and Properties:</h4>';
echo '<h5>A class is a template for objects, and an object is an instance of class.</h5>';
echo '<h6>OUTPUT:</h6>';

//Example 1:
class Fruit {
    public $name;   //properties of fruit
    public $color;

    function set_name($name){
        $this->name = $name;
    }

    function get_name($name){
        return $this->name;
    }
} 
echo '<hr>';




//OOP Objects
echo '<h4>Objects:</h4>';
echo '<h5>Properties require objects, Objects of a class are created using the new keyword.</h5>';
echo '<h6>OUTPUT:</h6>';

//Example 1:
class Fruit2{
    public $name;
    public $color;

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}

$apple = new Fruit2();
$banana = new Fruit2();

$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo '<br>';
echo $banana->get_name();

echo '<hr>';
//OOP Member Variables, Costructor, Destructor, Inheritance, Polymorphism (to be covered)



echo '<h4>Constructor Function:</h4>';
echo '<h5>Constructor Functions are special type of functions which are called automatically whenever an object is created. So we take full advantage of this behaviour, by initializing many things through constructor functions.</h5>';
echo '<h6>OUTPUT:</h6>';

//Example 1:
class Fruit3{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function get_name(){
        return $this->name;
    }

    function get_color(){
        return $this->color;
    }
}

$strawberry = new Fruit3("Strawberry", "Red");

echo $strawberry->get_name();
echo '<br>';
echo $strawberry->get_color();

echo '<hr>';



//Destructor
echo '<h4>Destructor:</h4>';
echo '<h5>Like a constructor function you can define a destructor function using function __destruct(). You can release all the resources with-in a destructor.</h5>';
echo '<h6>OUTPUT:</h6>';
echo '/* uncomment it */:';

//Example 1:
// class Fruit4{
//     public $name;
//     public $color;

//     function __construct($name, $color){
//         $this->name = $name;
//         $this->color = $color;
//     }

//     function __destruct(){
//         echo "<p>the fruit is {$this->name}'sand the color is {$this->color}</p>";
//     }
// }
// $strawberry = new Fruit4("Strawberry", "Red");
echo '<hr>';



//Inheritance
echo '<h4>Inheritance:</h4>';
echo '<h5>Inheritance in OOP = When a class derives from another class.</h5>';
echo '<h5>Parent and Child classes</h5>';
echo '<h6>OUTPUT:</h6>';

//Example 1:
class Fruit5 {
    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "<br> - A {$this->name} is a fruit and the color of the fruit is {$this->color} 🍒";
    }
}
echo '<br>';
class Cherry extends Fruit5 {
    public function message() {
        echo "Is cherry a fruit or a berry?";
    }
}

$cherry = new Cherry("Cherry", "red");
$cherry->message();
$cherry->intro();

echo '<hr>';



//Polymorphism
echo '<h4>Polymorphism:</h4>';
echo '<h5></h5>';
echo '<h6>OUTPUT:</h6>';

//Example 1:
class Fruit6 {
    function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "<br> - A {$this->name} is a fruit and the color of the fruit is {$this->color} ";
    }
}
class Cherry2 extends Fruit6{
    public $weight;
    public function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function intro() {
        echo "This Fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} grams";
    }
}

$cherry = new Cherry2 ("Cherry", "bright red", 20);
$cherry->intro();









echo '<hr>';
echo '<br>';
echo '<a href="../extension.php"><button >NEXT</button></a>';
echo ' PHP Extensions';
?>    
</body>
</html>
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
        margin-top: 25px;
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