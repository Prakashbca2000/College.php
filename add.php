<?php
    $connection= mysqli_connect("localhost","root","");

    $db = mysqli_select_db($connection,"college");


    if(isset($_POST['submit']))
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


<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equi="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>college</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
   </html>


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
                                <input type="text"name="name class="form-control" placeholder="Enter name"
                            </div>
                            
                            <div class="form-group">
                                <label>date of joining</label>
                                <input type="text"name="date of joining" class="form-control" placeholder="Enter date of joining"                    
                            </div>

                             <div class="form-group">
                                <label>address</label>
                                <input type="text"name="address" class="form-control" placeholder="Enter address"
                             </div>


                            <div class="form-group">
                                <label>department</label>
                                <input type="text"name="department" class="form-control" placeholder="Enter department"
                            </div>

                             <div class="form-group">
                                <label>phone number</label>
                                <input type="text"name="phone number" class="form-control" placeholder="Enter phone number"
                             </div>

                            <div class="form-group">
                                <label>gender</label>
                                <input type="text"name="gender" class="form-control" placeholder="Enter gender"
                            </div>

                            <div class="form-group">
                                <label>blood group</label>
                                <input type="text"name="blood group" class="form-control" placeholder="Enterblood group"
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