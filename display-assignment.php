<?php
include 'connect-assignment.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UGAC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <button class="btn btn-primary my-5"><a href="user-assignment.php" class="text-light"> Add Student </a>
    </button>
    
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Student Name</th>
      <th scope="col">Roll Number</th>
      <th scope="col">Department</th>
      <th scope="col">Hostel</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
$sql="Select * from info "; 
$result=mysqli_query($con,$sql);  //whatever data is stored should come into tables
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $studentname=$row['studentname'];
        $rollnumber=$row['rollnumber'];
        $department=$row['department'];
        $hostel=$row['hostel'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$studentname.'</td>
        <td>'.$rollnumber.'</td>
        <td>'.$department.'</td>
        <td>'.$hostel.'</td>
        <td>
<button class = "btn btn-primary"><a href="update-assignment.php? updateid='.$id.'" class="text-light">Update</a></button>

<button class = "btn btn-danger"><a href="delete-assignment.php? deleteid='.$id.'" class="text-light">Delete</a></button>
</td>

      </tr>'; //dot for concatenating
    }
}



?>



</td>
    
  </tbody>
</table>


    

</div>
    <!-- ////btn the blue colour  -->
</body>
</html>