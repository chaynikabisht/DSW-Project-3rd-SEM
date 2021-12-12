<?php

## connection w local host
$con= mysqli_connect('localhost','root');
if ($con){
    echo "connection secussful";}
    else echo "No Connection";


## connection with data base called songrequest
mysqli_select_db($con,'songrequest');
$user= $_POST['user'];
$song= $_POST['song'];
$artist= $_POST['artist'];
$dedication= $_POST['dedication'];

##query to insert data into the table called userdata
$query = "insert into userdata (user, song, artist, dedication)
values ('$user', '$song', '$artist', '$dedication')";
mysqli_query($con, $query);


echo($query);
header('location:index.php'); 

?>