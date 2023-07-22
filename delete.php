<?php

     $connection= mysqli_connect("localhost","root",);

     $db =$mysqli_select_db ($connecton,"college");
     $delete =$_GET['del'];


     $sql ="delete from staff where id='$delete'"


if(mysqli_query($connection,$sql))
{
    echo'<script>loocation.replace("index.php")</script>';
}
else
{
echosomething .$connection->error; 
}
 

?>