
<?php
  include('connection.php');
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>login</title>
</head>
<body>
  <form  id= "main" class="border border-light"   enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <h1>Confirm Password</h1>
        <hr>
         <div class="mb-4 main inner">
          <label class="form-label">Name</label>
          <input type="text" name="username" class="form-control" required>
        </div>
          <div class="mb-3 inner">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="Password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
        <input type="submit" name="submit"class="btn btn-primary bt" value="Login In" />
        <div>
          <a  class="bt" href="registration.php"> Create New Account</a>
        </div>
    </form>
           <?php
              if(isset($_POST['submit']))
                {
                      include "connection.php";
                      if(empty($_POST['username']) || empty($_POST['password']))
                      {
                        echo '<div class="alert alert-danger">All Fields must be entered.</div>';
                        die();
                      }
                      else
                      {
                          $username = mysqli_real_escape_string($connect, $_POST['username']);
                          $password = $_POST['password'];

                          $sql = "SELECT  id,username  FROM users WHERE username = '{$username}' AND password= '{$password}'";

                          $result = mysqli_query($connect, $sql) or die("Query Failed.");

                            if(mysqli_num_rows($result) > 0)
                            {

                                while($row = mysqli_fetch_assoc($result))
                                {
                                  session_start();
                                  $_SESSION['form'][0]=array('username'=> $row['username'],'userid'=>$row['id']);
                                  // $_SESSION["username"] = $row['username'];
                                  // $_SESSION["user_id"] = $row['id'];
                                  header("Location: home.php");
                                }
                             }
                            else
                            {
                              echo '<div class="alert alert-danger">Username and Password are not matched.</div>';
                            }
                      }
                }
            ?>
</body>
</html>