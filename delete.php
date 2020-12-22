<?php
include('connection.php');
?>
<?php



$id=$_GET['id'];
echo $id;

$q="delete from student where id='$id'";
$res=mysqli_query($conn,$q);



if($res)
{
    echo "deleted";
    header('location:index.php');
}
else{
    echo "not deleted";
    header('location:index.php');
}



?>