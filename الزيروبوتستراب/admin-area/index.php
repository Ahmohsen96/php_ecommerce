<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- font awesome cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;500&display=swap" rel="stylesheet">

<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="all.min.css">
<link rel="stylesheet" href="../style.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist

</head>
<body>
<div class="container-fluid p-0">
 <!-- first child  -->
<nav class="navbar navbar-expand-lg "style="background-color: #e3f2fd;">
 <div class="container-fluid">
    <img src="https://avatars.mds.yandex.net/i?id=e2e7d404f2b60815ed8d534c619d41cf-5235574-images-thumbs&n=13" alt="Bootstrap" class="logo">
    <div class="p-2 ">
        <ul class="navbar-nav me-auto ">
          <li class="nav-item">
            <a class="nav-link text-dark flex-fill " href="#">welecom geust</a>
          </li>
         </ul>
    </div>
 </nav>
 <!-- second child -->
 <div class="bg-light p-3">
    <h3 class="text-center">manage details </h3>
 </div>
</div>
 
 
</nav>
<!-- third details -->
<div class="row">
 <div class="col-md-12 bg-secondary p-1  text-center">
    <div class="p=5">
    <a href=""><img src="https://avatars.mds.yandex.net/i?id=6b1b9da55a53f6d097ebc6a5ac75946aa5256ecf-5342042-images-thumbs&n=13" alt="" class="admin_image "></a>
    <p class="text-light text-center">admin name</p>
</div>
<!-- button -->
<div class="button text-center bg-secondary ">
  <button class="my-3 p-9"><a href="" class="nav-link text-light bg-info my-1">insert product </a></button>
  <button><a href="" class="nav-link text-light bg-info my-1">view product</a></button>
  <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">insert category</a></button>
  <button><a href="" class="nav-link text-light bg-info my-1">view category</a></button>
  <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">insert brand</a></button>
  <button><a href="" class="nav-link text-light bg-info my-1">view brand</a></button>
  <button><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
  <button><a href="" class="nav-link text-light bg-info my-1">all payments</a></button>
  <button><a href="" class="nav-link text-light bg-info my-1">list user</a></button>
  <div>
  <button><a href="" class="nav-link text-light bg-info my-1">logout</a></button>
  </div>
</div>

</div>
</div>

 <!-- forth details  function to display by include-->

  <div class="container">
  <?php 
  if (isset($_GET['insert_category'])){
    include ('insert_categories.php');
  }

  if (isset($_GET['insert_brand'])){
    include ('insert_brands.php');
  }
  ?>
  </div>

  
 

 <!-- last child -->

<div class="fotter p-3 " style="background-color: #e3f2fd ;">
<p class="text-center"> all revesation are saved</p>
 </div>

</div>

    
 <!-- js bootstrao -->
<script src="/bootstrap.bundle.min.js"></script>
 <script src="/all.min.js"></script>
    
</body>
</html>
