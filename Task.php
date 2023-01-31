<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>

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
    <input type="email" placeholder="Enter Task Name" class="input"> <input type="submit" value="Submit">
    </div>
    <h3>Current Task </h3>
    </div>
    
    
</body>
</html>