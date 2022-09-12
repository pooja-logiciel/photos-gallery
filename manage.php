 <?php
 include('connection.php');
 session_start();
   // print_r($_SESSION['form']);

     if(isset($_POST['submit']))
     {
     	$title=$_POST['title'];
      $filename=$_FILES['image']['name'];
      $filepath=$_FILES['image']['tmp_name'];
      $imagename=explode(".", $filename);
      $ex=$imagename[1];
      $sql="show table status like 'imageupload'";
      $result=mysqli_query($connect,$sql);
      $row=mysqli_fetch_assoc($result);
      $id=$row['Auto_increment'];
      $newfilename=$id.".".$ex;
      // print_r($newfilename);
      $user_id = $_SESSION['form'][0]['userid'];
       $public=1;
      $total=0;
      $query="insert into imageupload (user_id, image,title,public,totalviews)values($user_id,'$newfilename','$title',$public,$total)";
        if(mysqli_query($connect,$query))
        {
          echo "yess";
         if( move_uploaded_file($filepath,"gallery/".$newfilename))
         {
           echo "<script>
              alert('image saved');
              window.location.href='home.php';
              </script>";
         }
        }
        else
        {
        	echo "nott";
        }
     }
    
?>