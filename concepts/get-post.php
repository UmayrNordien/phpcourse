<html>
<title>GET | POST</title>
<body>
<div class="header">
    <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
    </div>
</div>

<?php
echo '<br>';
echo '<a href="http://localhost/phpcourse/"><button >BACK TO INDEX</button></a>';
echo '<br>';

echo '<h2><pre>GET | POST</pre></h2>';

echo '<br>';
echo '<hr>';



if(isset($_GET["name"]) || isset($_GET["age"])) {
    echo 'Hi '. $_GET["name"]. "<br>";
    echo "Your age is". $_GET["age"]. "years"; 
}







?>
<form action = "<?php $_PHP_SELF ?>" method = "GET">
    Name: <input type="text" name="name"/>
</form>

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