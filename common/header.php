<div class="text-center" style="height:200px; background:#eee">
		<h1 class="text-center pt-4"> Welcome <?php echo $user_name?></h1>	
		<?php
		if(!isset($_GET['public']) || !isset($_GET['most-popular'])) 
		{
		?>
		   	<span>Click Here for upload Images
		   		<a href="Upload.php"><input type="submit" class="text-dark"></a>
		   	</span>
		<?php
		}else {
			?>
			<span>Here all the images are <?php echo ($_GET['public'] == 1) ? 'Public' : 'Private'?>
		   	</span>
			<?php
		}
		?>
		
</div>	