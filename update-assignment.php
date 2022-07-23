<?php
include 'connect-assignment.php';
$id=$_GET['updateid'];
$sql="Select * from info where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$studentname=$row['studentname'];
$rollnumber=$row['rollnumber'];
$department=$row['department'];
$hostel=$row['hostel'];

if(isset($_POST['submit'])){
   $studentname=$_POST['studentname'];
   $rollnumber=$_POST['rollnumber'];
   $department=$_POST['department'];
   $hostel=$_POST['hostel'];
   $sql="update  info set id=$id, studentname='$studentname', rollnumber='$rollnumber', 
   department='$department', hostel='$hostel' where id=$id";
   $result=mysqli_query($con,$sql);
   if($result){
   // echo "Data updated successfully"; by this the user page would not show data updated and will redirect to display.php page
   header('location:display-assignment.php');
   } 
   else
   {
    die(mysqli_error($con));
   }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>UGAC</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Student Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="studentname" autocomplete="off" value=<?php echo $studentname; ?>> 
            </div> 
              
            <div class="form-group">
                <label>Roll Number</label>
                <input type="text" class="form-control" placeholder="Enter your roll number" name="rollnumber" autocomplete="off" value=<?php echo $rollnumber; ?>>
            </div>
            <div class="form-group">
                <label>Department</label>
                <input type="text" class="form-control" placeholder="Enter the name of your department" name="department" autocomplete="off" value=<?php echo $department; ?>>
            </div>
            <div class="form-group">
                <label>Hostel</label>
                <input type="text" class="form-control" placeholder="Enter the name of your Hostel" name="hostel" autocomplete="off" value=<?php echo $hostel; ?>>
            </div>
                                                                                                                            

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
        
    </div>

</body>

</html>


