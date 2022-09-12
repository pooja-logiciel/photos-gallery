<?php
 include('connection.php');
  
  if(isset($_POST['regis']))
  {
   $name=$_POST['username'];
   $password=$_POST['password'];
   $email=$_POST['email'];
   $filename=$_FILES['image']['name'];
   $filepath=$_FILES['image']['tmp_name'];
   $imagename=explode(".", $filename);
   $ex=$imagename[1];
   $sql="show table status like 'users'";
   $result=mysqli_query($connect,$sql);
   $row=mysqli_fetch_assoc($result);
   $id=$row['Auto_increment'];
   $newfilename=$id.".".$ex;
   $query ="insert into users (username,password,email,image) values('$name','$password','$email','$newfilename')";
    session_start();
      $_SESSION['form'][0]=array('username'=> $name,'email'=>email);
    if(mysqli_query($connect,$query))
    {
    	echo "yess";
    }
    else
    {
    	echo "nott";
    }
  }
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><script src=
   "https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity=
   "sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<title>registration</title>
</head>
<body>
	 <form  id= "main" class="border border-light"   enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <h1>Registration Form</h1>
        <hr>
         <div class="mb-4 main inner">
          <label class="form-label">Name</label>
          <input type="text" name="username" class="form-control" required>
         </div>
          <div class="mb-3 inner">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="Password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
          </div>
          <div class="mb-3 inner">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
           </div>
           <div class="mb-3 inner">
            <label for="exampleInputEmail1" class="form-label">Upload Your Profie Pic</label>
            <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"required>
           </div>
        <input type="submit" name="regis"class="btn btn-primary bt" value="Create Account" />
        <!-- <input type="submit" name="regis"class="btn btn-primary bt" value="Login In" /> -->
    </form>

</body>
</html>