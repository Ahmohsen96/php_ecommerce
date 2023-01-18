<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <!-- *what the important of name in input ? -->

<!-- ********************************************************************** -->

<!-- * how to display form or any thing in the same page after press button
1- put in button href "page that we display on it?insert_cate(any variable)"
2-creat page (in the same folder)to write syntax of form for example 
3- fun to check and display 
<div class="container">
  <?php 
  if (isset($_GET['insert_cate'])){
    include ('insert_categories.php');
  }
  ?>
  </div> -->

  <!-- ********************************************************************** -->

  <!-- how to connect to data base -->

  <!-- $con =mysqli_connect('localhost','root','','mystore');
  if(!$con){
    die(mysqli_error($con));
} -->
  <!-- ********************************************************************** -->

  <!-- study $_post $_get -->


    <!-- ********************************************************************** -->

<!-- // insert to database -->
<!-- <?php
// include('../includes/connect.php');  
// استدعاء مسار ملف الاتصال بالداتا بيز 

//  if(isset($_POST['insert_cat'])){
//   في حالة الضغط او وجود قيمة للبوتون 
//   $category=$_POST['cat_title'];
//   أكسيس القيمة اللي جوا الدخل اللي اسمه كات تايتل  وحطها في متغير 

//   $insert_query= "INSERT INTO categories (category_title) VALUES ('$category')";
//   هندخل القيمة دي للداتا بيز بالكويري دي 

//   $result=mysqli_query($con,$insert_query);
//   هنفذ نعمل رن بالفانكشن دي 

//   if($result){
//     echo "<script> alert('category has been inserted successfuly') </script>";
//     في حالة ان الدنيا تمام اظهر رسالة عرفنا 
//   }

//  }
//  ?> 

     ******************************insert data without duplication**************************************** 

     include('../includes/connect.php');

  // prevent replication of inserted data 
 if(isset($_POST['insert_cat'])){
  $category=$_POST['cat_title'];

  $select_query= "SELECT * FROM categories WHERE (category_title) = ('$category')";
  بنعمل كويري تخلينا نفتش الداتا اللي شبه بعضها 
  $select_result=mysqli_query($con,$select_query);
  بنفذ الكويري 

  $row_number=mysqli_num_rows($select_result);
  بنعد السطور الخرج 

  if($row_number>0){
    echo "<script> alert('category has been inserted before !! ') </script>";
    جطينا شرط يتنفذ هما اكتر من سطر 

  }else{
    لو مش اكتر انسيرت عادي
    // insert data
  $insert_query= "INSERT INTO categories (category_title) VALUES ('$category')";
  $result=mysqli_query($con,$insert_query);
  if($result){
    echo "<script> alert('category has been inserted successfuly') </script>";
  }
  }
 }

     


    
</body>
</html>