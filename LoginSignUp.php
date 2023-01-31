<!DOCTYPE html>
<html>
  <head>
    <style>
      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
      }

      form {
        display: flex;
        flex-direction: column;
        background-color: #f2f2f2;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 2px 2px 5px #ccc;
      }

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        box-shadow: 2px 2px 5px #ccc;
      }

      input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4caf50;
        color: #fff;
        border-radius: 5px;
        border: none;
        font-size: 18px;
        cursor: pointer;
      }



    </style>
  </head>
  <body>
  
    <div class="container">
      <form action="login.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username">
      <br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      <br><br>
      <input type="submit" value="Submit">
      </form>
    </div>
    
    
  </body>
</html>