<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <style>
  @import url('https://fonts.googleapis.com/css?family=Lato');
  body{             
    font-family: 'Lato';
    background: linear-gradient(to right, #3498db, #1abc9c);
  }
  .form{
    position:absolute;
    left:35%;
    top:12%;
    box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
    background-color: white;
    padding: 40px;
  }
  .but{
    background-color: white;
    border-radius: 0px;  
    border-width: 0px;
    box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23); 
    padding: 8px;
  }
</style>
<div class="form">
  <h2>Enter your login credentials</h2>

  <form action="login.php">
    
    <div class="container">
      <label for="uname"><b>Username</b></label>&nbsp&nbsp
      <input type="text" placeholder="Enter Username" name="uname" required><br><br>

      <label for="psw"><b>Password</b></label>&nbsp&nbsp
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>

      <button type="submit" class="but">Login</button>
    </div>

  </form>

  <br>

  <h2>Create User</h2>

  <form action="createuser.php">
    
    <div class="container">
      <label for="uname"><b>Username</b></label>&nbsp&nbsp
      <input type="text" placeholder="Enter Username" name="uname" required><br><br>

      <label for="psw"><b>Password</b></label>&nbsp&nbsp
      <input type="password" placeholder="Enter Password" name="psw" required><br><br>

      <button type="submit" class="but">Create User</button>
    </div>

  </form> 
</div>
</body>
</html>