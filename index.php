<?php 
$con = mysqli_connect("localhost","root","","social");

if(mysqli_connect_errno()){
    echo "Failed to connect : " . mysqli_connect_errno();
}

$query = mysqli_query($con,"INSERT INTO test VALUES('1', 'BOWO')");

?>

<html>
    <head>  
    <title>Wlcome to The Swirlfeed!</title>
    </head>


    <body>
    hei !
    <h1> HELLO</h1>
    
    </body>
</html>