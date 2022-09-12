<!-- <?php
  include('connection.php');
   include('common/Navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>public</title>
</head>
<body>
        <div class="row text-center mt-5"  >
        <div class="col-lg-12 col-sm-12 col-md-12 ">
		<div class="row">
		    <?php
		    		$public=($_GET['public'] == 1) ? 0 : 1;
		        $query = " select * from imageupload  where public =$public";
		        $result = mysqli_query($connect, $query);
		        
		        while ($data = mysqli_fetch_assoc($result)) {
	        	if($data)
	           		{
	           			include('common/image-listing.php');
	          
			    }
			    
		    ?> 
			</div>
		    <?php
		        }
		    ?>
		</div>
	</div></div>
</body>
</html> -->