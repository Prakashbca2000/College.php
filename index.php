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
    
        <div class="container">
             <div class="row">
                  <div class="col-md-9">
                     <div class="card">
                     <div class="card-header">
                        staff
                     </div>
                     <table class="card-body">
                     <buttn class="btn btn-success"> <a href="add.php" class="text-light"> Add New </a> </button>
                         <br/>
                         <br/>
                     <table class="table">
                        <thead>
                             <tr>
                             <th scope="col">#</th>
                             <th scope="col">name</th>
                             <th scope="col">date of joining</th>
                             <th scope="col">address</th>
                             <th scope="col">department</th>
                             <th scope="col">phone number</th>
                             <th scope="col">gender</th>
                              <th scope="col">blood group</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                 $connection= mysqli_connect("localhost","root","");
                                 $db =mysqli_select_db($connection,"college");

                                    $sql="select*from student";
                                    $run=mysqli_query($connection,$sql);
                                    $id=1;
                                    
                                    {
                                      $name =['name'];  
                                      $dateofjoining =['date of joining'];
                                      $address =['address'];
                                      $department =['department'];
                                      $phonenumber =['phone number'];
                                      $gender =['gender'];
                                      $bloodgroup =['blood group'];
                                    }

                             ?>      
                                


                             </td>
                                <?php  ?>        
                                <button class="btn btn-success"> <a href='edit.php?edit=<?php echo $uid ?>' class="text-light"> edit </a> </button> &nbsp;
                                <button class="btn btn-success"> <a href='edit.php?del=<?php echo $uid ?>' class="text-light"> delete </a> </button>

                                    </td>



                            </td>


              </tbody>
                         </table>
                     
                     </div> 
                      </div>
                 </div>
             </div>

        </div>

</body>
</html>