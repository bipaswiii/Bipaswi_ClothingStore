<?php
session_start();
?>

<?php include("database.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>My products</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>
<?php include('navbar.php'); ?>
<div class="container"> 
    <div class="row">
<?php 
$qq = "select * from clothes";
$result = $conn -> query ($qq);
 //fetches data from db
while ($data= $result -> fetch_assoc()){ ?>
    <div class="col-md-4">
<p><a href="comment.php?id=<?php echo $data['id'];?>"><img src="uploads/<?php echo $data['picture']; ?>" class="img-thumbnail" /></p></a>
<h2 class ="pro-title"><?php echo $data ['title']; ?></h2>
<p> Type: <?php echo $data ['type']; ?></p>
<p> Size: <?php echo $data ['size']; ?></p>
<p> Price :<?php echo $data ['price']; ?></p>
<p> Material :<?php echo $data ['material']; ?></p>
<?php if (isset ($_SESSION['ticket'])) { ?>
<button type="button" class="btn btn-danger"><a href="action.php?clothesid=<?php echo $data ['id']; ?>" style="color:white"> Delete </a></button>
<button type="button" class="btn btn-success"><a href="update_clothes.php?id=<?php echo $data['id']; ?>" style="color:white">Update </a>
<?php } ?>
</div>
<?php
}
?>

    
</body>
</html>