<div class="col-lg-4 mt-3">
	<div class="card p-3">
		<img class="card-img-top" src="./gallery/<?php echo $data['image']; ?>"style ="width:250px; height:200px;"/>
	</div>
	<div class="card bg-dark">
		<h5 class="card-subtitle mb-2 mt-4 text-center text-light"><?php echo $data['title'];?></h5>
	<div>
	<div>
		<a href="home.php?did=<?php echo $data['id']?>" ><i class="fa fa-trash" aria-hidden="true" style="margin-top: 0px; float:right;"></i></a>
		<?php
		if(isset($_GET['public']) && $_GET['public'] == 1) 
		{
			?>  
			<a href="view.php?view=<?php echo $data['id']?>" name="view"><i class="fa fa-eye" aria-hidden="true" style="margin-top: 0px; float:right;"></i></a>
			<span class="text-light">TotalViews:  <?php echo $data['totalviews'] ?></span>
		<?php } ?>
	</div>
	</div>  
	<?php
	if(!isset($_GET['public'])) 
	{
		?>  
		<span class="text-center text-light">This Image Has been <?php echo ($data['public'] == 1) ? 'Public' : 'Private'?> Click Here to
			<a href="public.php?public=<?php echo ($data['public'] == 1) ? 0 : 1 ?>&id=<?php echo $data['id']?>"> 
				<?php echo ($data['public'] == 0) ? 'Public' : 'Private'?>
			</a>
		</span>
		<?php 
	} 
	?>
	</div>
</div>