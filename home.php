<?php
	include('connection.php');
	include('common/Navbar.php');
	include('manage.php');

    //delete//
   if(isset($_GET['did']))
      {
        $id=$_GET['did'];
        print_r($id);
        $query="delete from imageupload where id=$id";

        mysqli_query($connect,$query);
      }  

       //delete//
   	// if(isset($_GET['public']) && isset($_GET['id']))
    //   {
    //     $public=($_GET['public'] == 1) ? 1 : 0;
    //     $id=$_GET['id'];
    //     $query="update imageupload set public=$public WHERE id=$id";
	   //  $result=mysqli_query($connect,$query);
    //   }  
 
  $user_name = $_SESSION['form'][0]['username'];
	include('common/header.php');

  ?>

	<div class="container-fluid" style="width:70%">
      <div class="row">
			<?php
				$user_id = $_SESSION['form'][0]['userid'];
				$query = " select * from imageupload  where user_id =$user_id";
				$result = mysqli_query($connect, $query);

				while ($data = mysqli_fetch_assoc($result)) {
				if($data)
					{
					include('common/image-listing.php');
				}  
			?> 
			<?php
				}
			?>
		</div>
	</div>
