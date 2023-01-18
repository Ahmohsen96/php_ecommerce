<?php
// insert to database
include('../includes/connect.php');

  // prevent duplication of inserted data 
 if(isset($_POST['insert_cat'])){
  $category=$_POST['cat_title'];

  $select_query= "SELECT * FROM categories WHERE (category_title) = ('$category')";
  $select_result=mysqli_query($con,$select_query);
  $row_number=mysqli_num_rows($select_result);
  if($row_number>0){
    echo "<script> alert('category has been inserted before !! ') </script>";

  }else{
    // insert data
  $insert_query= "INSERT INTO categories (category_title) VALUES ('$category')";
  $result=mysqli_query($con,$insert_query);
  if($result){
    echo "<script> alert('category has been inserted successfuly') </script>";
  }
  }
 }
 ?>
<form action="" method="post">

  <!-- <div class="mb-3"> -->
    <!-- <label for="exampleInputEmail1" class="form-label"></label> -->
    <!-- <input type="text" class="form-control" id="exampleInputEmail1" name="cat_title" > -->
    
  <!-- </div> --> 

  <div class="input-group mb-2 my-5">
  <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" placeholder="categories" aria-label="categories" aria-describedby="basic-addon1" name="cat_title">
</div>
  <div class="input-group">
  <button type="submit" class="btn btn-primary px-3 mb-2 " name="insert_cat" value="insert categories">insert category</button>
</div>
</form>