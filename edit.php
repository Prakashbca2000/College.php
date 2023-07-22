<?php

     $connection= mysqli_connect("localhost","root",);

     $db =$mysqli_select_db ($connecton,"college");


     $edit =$_GET['edit'];

$sql ="select * from staff where name ='$edit'";
$run =mysqli_query($connection,$sql);
while($row =mysqli_fetch_array($run))
{
    $name =$row['name'];  
    $dateofjoining =$row['date of joining'];
    $address =$row['address'];
    $department =$row['department'];
    $phonenumber =$row['phone number'];
    $gende =$row['gender'];
    $bloodgroup =$row['blood group'];

}

?>





<?php
    $connection= mysqli_connect("localhost","root","");
    $b =mysqli_select_db($connecton,"college");

    if (assist($_POST['submit']))
      {
        $name =$_POST["name"];
        $date  =$_POST["date of joining"];
         $address =$_POST["address"];
         $department =$_POST["department"];
        $phone  =$_POST["phone number"];
        $gender =$_POST["gender"];
        $blood  =$_POST["blood group"];

            $sql="insert into staff(name,date of joining,address,department,phone number,gender,blood group)values('$name,$date of joining,$address,$department,$phone number,$gender,$blood group)";

            if(mysqli_query($connection,$sql))
            {
                echo'<script>loocation.replace("index.php")</script>';
            }
            else
            {
            echosomething .$connection->error; 
            }
        }    

?>



 <!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equi="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>college</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    
        <div class="container">
             <div class="row">
                  <div class="col-md-9">
                     <div class="card">
                     <div class="card-header">
                        staff
                     </div>
                     <table class="card-body">
                     
                     <form action"add.php" method="post">
                            <div class="form-group">
                                <label>name</label>
                                <input type="text"name="name class="form-control" placeholder="Enter name" value="<?php echo $name ?>">
                            </div>
                            
                            <div class="form-group">
                                <label>date of joining</label>
                                <input type="text"name="date of joining" class="form-control" placeholder="Enter date of joining"  value="<?php echo $dateofjoining ?>">                   
                            </div>

                             <div class="form-group">
                                <label>address</label>
                                <input type="text"name="address" class="form-control" placeholder="Enter address" value="<?php echo $address ?>">
                             </div>


                            <div class="form-group">
                                <label>department</label>
                                <input type="text"name="department" class="form-control" placeholder="Enter department" value="<?php echo $department ?>">
                            </div>

                             <div class="form-group">
                                <label>phone number</label>
                                <input type="text"name="phone number" class="form-control" placeholder="Enter phone number" value="<?php echo $phnenumber ?>">
                             </div>

                            <div class="form-group">
                                <label>gender</label>
                                <input type="text"name="gender" class="form-control" placeholder="Enter gender" value="<?php echo $gender ?>">
                            </div>

                            <div class="form-group">
                                <label>blood group</label>
                                <input type="text"name="blood group" class="form-control" placeholder="Enterblood gro value="<?php echo $bloodgroup ?>">
                            </div>
                            <br/>  
                            <input type="submit" class="btn btn-primary">name="Submit'value="register">
                            </form>
                     
                     </div> 
                      </div>
                 </div>
             </div>

        </div>

</body>
</html>