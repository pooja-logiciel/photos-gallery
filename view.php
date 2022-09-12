<?php  include('common/Navbar.php'); ?>
<div class="container-fluid" style="width:70%">
  <div class="row">
    <?php
    include('connection.php');
    $id=$_GET['view'];
    $query="select * from imageupload where id=$id";
    $result = mysqli_query($connect, $query);
    while ($data = mysqli_fetch_assoc($result)) {
      if($data)
      {
        if(isset($_GET['view']))
        {
          $totalview = 1 + $data['totalviews'];
          $que="update imageupload set totalviews=$totalview WHERE id=$id";
          $resu=mysqli_query($connect,$que);
          ?>
          <div class="col-lg-12">
            <div>
              <h3 class="text-center">Title : <?php echo $data['title']?> </h3>
            </div>
            <div class="text-center">
              <h5 >
                This Image Has been <?php echo ($data['public'] == 1) ? 'Public' : 'Private'?> 
              </h5> 
            </div>
          </div>
          <div class="col-lg-12">
            <img class="image-responseive" src="./gallery/<?php echo $data['image']; ?>"style ="width:100%; height:70% "/>
            <div >
                <a href="public.php?public=1" class="btn btn-primary">Goback</a>
            </div>
          <?php 
        }     
      }  
      ?> 
      <?php
    }
    ?>
  </div>
</div>
