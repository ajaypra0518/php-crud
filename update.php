<?php
include('connection.php');
error_reporting(0);
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>
<body>


   <?php
  
   $id=$_GET['id'];
   $query="select * from student where id='$id'";
   $ress=mysqli_query($conn,$query);
   $x=mysqli_fetch_assoc($ress);
   
   ?>
  


<h1 style="text-align:center">Update Operation</h1><br>
  <div class="card mx-auto" style="width: 18rem; border:.10rem solid pink;">
    <form method="POST"  style="margin:10px" ;>
      <div class="form-group form-center">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?php echo $x['name'] ;?>">

        </div>
      <div class="form-group">
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" value="<?php echo $x['password']; ?>">
      </div>

      <button type="submit " class="btn btn-primary btn-block" name="b1">Submit</button>
    </form>

  

  </div>
  </body>

  <?php   
if(isset($_POST['b1']))
{
 
   $id=$_GET['id'];
   $name=$_POST['name'];
   $password=$_POST['pwd'];
   $q="update student set name='$name',password='$password' where id='$id'";
   $res=mysqli_query($conn,$q);

   if($res)
   {
   echo "updated";
   header('location:index.php');
   }  
}
 
   
   ?>