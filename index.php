<?php
include('connection.php');
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">

  <title>Hello, world!</title>
</head>

<body>

  <?php
      if(isset($_GET['a']))
      {
      $b=$_GET['a'];
    if($b)
    {?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Inserted Successfully</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <?php
    unset($_GET['a']);
    }
  }
  
    ?>


  <br>
  <h1 style="text-align:center">Insert Operation</h1><br>
  <div class="row">


  <div class="card mx-auto " style="width: 18rem; border:.10rem solid pink; display:inline-block;  box-sizing: border-box;    height: 250px;">
    <form method="POST" action="insert.php" style="margin:10px;" ;>
      <div class="form-group form-center">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="pwd">
      </div>

      <button type="submit " class="btn btn-primary btn-block" name="b1">Submit</button>
    </form>




  </div><br>
  <div class="card mx-auto " style="width: 30rem; border:.10rem solid pink;  display:inline-block;">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th>Id</th>
          <th>name</th>
          <th>Password</th>
          <th>Delete</th>
          <th>Update</th>
        </tr>
      </thead>

      <tbody>
      <?php
          
          $q="select * from student";
          $res=mysqli_query($conn,$q);
          $i=1;
          while($x=mysqli_fetch_assoc($res))
          
          {?>
    
        <tr>

          <td ><?php echo $i;?> </td>
          <td><?php echo $x['name'];?></td>
          <td><?php echo $x['password'];?></td>

          <td><a style="text-decoration: none; text-styel: none;"
                class=" btn-danger" href=delete.php?id=<?php echo $x['id'];?>><button type="button" class="btn btn-danger" name="d1">Delete</button></a>
          </td>

          <td><a style="text-decoration: none; text-styel: none;"
                class=" btn-success" href=update.php?id=<?php echo $x['id'];?>><button type="button" class="btn btn-success">Update</button></a>
          </td>
        </tr>

     
      <?php
      $i++;
          }
          ?>
           </tbody>



    </table>

  </div>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src= "https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

 <script>
 $(document).ready( function () {
    $('#myTable').DataTable({
      
    });
} );
 </script>
</body>

</html>