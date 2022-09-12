<?php
   include('connection.php');
   include('common/Navbar.php');

   //   if(!empty($_GET['eid']))
	  // {
	  //   $id=$_GET['eid'];
	  //   $query="select *from imageupload where id=$id";
	  //   $result=mysqli_query($connect,$query);
	  //   $ro=mysqli_fetch_assoc($result);
	  // }
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>upload image</title>
</head>
<body>
   <div class="border border-2">
		<form id="main" method ="Post" action ="manage.php" enctype="multipart/form-data">
		   <h2>Image Upload</h2>
		   <br> 
		  <div class="mb-3 inner">
		  	<h4>Image</h4>
		   <!--  <label for="exampleInputEmail1" class="form-label">Image</label> -->
		    <input type="file" name ="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		  </div>
		  <div class="mb-3 inner">
		  	<h4>Title</h4>
		   <!--  <label for="exampleInputPassword1" class="form-label">Title</label> -->
		    <input type="text" name="title"  class="form-control" id="exampleInputPassword1">
		  </div>
	 	  <button type="submit" name="submit" value="upload " class="btn btn-primary bt">Submit</button>
	    </form>
	</div>
</body>
</html>