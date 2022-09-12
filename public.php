<?php
include('connection.php');
include('common/Navbar.php');
session_start();

if(isset($_GET['public']) && isset($_GET['id']))
{
	$public=($_GET['public'] == 1) ? 0 : 1;
	echo   "<script>
	alert('switch to public');
	</script>";
	$id=$_GET['id'];
	$query="update imageupload set public=$public WHERE id=$id";
	$result=mysqli_query($connect,$query);
}   
$user_name = $_SESSION['form'][0]['username']; 
include('common/header.php');
?>


	<div class="container-fluid" style="width:70%">
		<div class="row">
			<?php
			if(isset($_GET['public']))
			{
				$public=($_GET['public'] == 1) ? 
				1 : 0;
			}
			$user_id = $_SESSION['form'][0]['userid'];
			echo($user_id); 
			if($user_id)
			{
				$query = "select * from imageupload  where user_id=$user_id";
				$result = mysqli_query($connect, $query);
				while ($data = mysqli_fetch_assoc($result)) 
				{
					if($data && $data['public'] == $public)
					{
						include('common/image-listing.php');
					}
					?> 
					<?php
				}
				// echo($data.length);
				?>
				<?php
			}
		?>
	</div>
</div>
