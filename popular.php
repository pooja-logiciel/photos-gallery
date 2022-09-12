<?php
include('connection.php');
include('common/Navbar.php');
session_start();

if(isset($_GET['public']) && isset($_GET['id']))
{
	$public=($_GET['public'] == 1) ? 1 : 0;
	echo   "<script>
	alert('switch to public');
	</script>";
	$id=$_GET['id'];
	$query="update imageupload set public=$public WHERE id=$id";
	$result=mysqli_query($connect,$query);
}   
$user_name = $_SESSION['form'][0]['username']; 
?>
<h2 class="text-center mt-4">Most Popular</h2>
<div class="container-fluid" style="width:70%">
	<div class="row">
		<?php
		if(isset($_GET['public']))
		{
			$public=($_GET['public'] == 1) ? 
			1 : 0;
		}
		$query = "select * from imageupload";
		$result = mysqli_query($connect, $query);
		while ($data = mysqli_fetch_assoc($result)) 
		{
			if($data && $data['totalviews'] >= 10)
			{
				include('common/image-listing.php');
			}
			?> 
			<?php
		}
		?>
	</div>
</div>
