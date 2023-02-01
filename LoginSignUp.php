<!DOCTYPE html>
<html>
  <head>
    <style>
      body{
        background: linear-gradient(to right, rgba(0, 0, 0, .5), rgba(0, 0, 0, .1)), url(\'https://images.unsplash.com/photo-1615715757401-f30e7b27b912?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8MXwxMTI1NDUzfHxlbnwwfHx8fA%3D%3D&w=1000&q=80\');
      }
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
        <h1>Login</h1>

      <label for="username">Username:</label>
      <input type="text" id="username" name="username">
      <br><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      <br><br>

      <input type="submit" value="Submit">
      <p><a href="signup.php">Click here to Register</a></p>
      

      </form>
    </div>
    
    
  </body>
</html>