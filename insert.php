
<?php
include('connection.php');
?>
<?php
if(isset($_POST['b1']))
{
  $b=false;
  $name=mysqli_real_escape_string($conn,$_POST['name']);
  $password=$_POST['pwd'];
  // $q="insert into student(name,password) values('$name','$password')";
  $q="INSERT INTO `student` (`name`, `password`) VALUES ('$name', '$password')";
  $res=mysqli_query($conn,$q);

  if($res)
  {
    $b=true;
    header("location:index.php?a=$b");
  }
  else
  {
    echo "not inserted";
    header('location:index.php');
  }
 
}
  

?>

