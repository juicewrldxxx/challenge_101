<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    body {
      margin: 0;
      box-sizing: border-box;
    }
    div.a {
    text-align: center;
    }
    .pd {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      background: linear-gradient(to right, rgba(0, 0, 0, .5), rgba(0, 0, 0, .1)), url(\'https://images.unsplash.com/photo-1615715757401-f30e7b27b912?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXwxMTI1NDUzfHxlbnwwfHx8fA%3D%3D&w=1000&q=80\');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }
    .image {
        padding: -10%; 
        margin: 0%;
    }
    </style>
    
    
   

</head>

<body>
  <?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'lab101';
    $conn = mysqli_connect($host, $user, $password, $dbname);
  ?>
   <div class="pd"> 

   <div class = "image">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <a href="Index.php"><button class="btn"><i class="fa fa-home"></i> Home </button></a>
    </div>

    <div class="a">
    <h1>Task List</h1>
    </div>
    <h3>New Task</h3>
    <div class="field input-field">
    
      <form action="tasklist.php" method="post" style="width: 500px;">
          <div class="form-row flex">
            <input style="width: 400px" class="form-control" type="text" required id = "taskname"placeholder="Enter Task Name" name = "taskname">
            <input class="btn btn-primary ml-2" type="submit" value="Submit">
          </div>
      </form>

    </div
    <div style="width: 500px;" class="bg-warning row mt-4">
    <ul class="list-group mt-2 m-0 p-0" style="width: 400px;">
    
/* render data frome database */
      <?php
        $q = "SELECT * FROM tasks";
        $query = mysqli_query($conn, $q);
        while($row = mysqli_fetch_assoc($query)){
          ?>
            <li class="list-group-item flex justify-end"><?php echo $row["taskname"] ?> 
            <a class="inline-block" href="delete.php?id=<?php echo $row['id'] ?>">delete</a>
            </li>
          <?php
        }
      ?>
      </ul>
    </div>
  </div>
</body>
</html>