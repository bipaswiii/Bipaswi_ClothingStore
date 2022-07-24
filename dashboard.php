<?php session_start();
if(!$_SESSION['ticket']) {
    header('location:login.php');
}

$userid= $_SESSION['userid'];
include('database.php');
$query="select * from customer where id= '$userid' ";
$result=$conn->query($query);
$dataUser=$result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link type="text/css" rel="stylesheet" href="navbar.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<?php include ('navbar.php'); ?>   
<title>My Dashboard</title>
    
    
</head>
<body>

<section class="vh-100"  style="background-image: url('images/clothing5.jpg');background-repeat:no-repeat; background-size:100% auto; background-position:ceter top; background-attachment:fixed; height:900px">
<div class="container py-5 h-200">
    
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
        

          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="images/bipaswi.png"
                class="rounded-circle img-fluid" style="width: 100px;" />
                
            </div>
            <h4 class="mb-2"><?php echo $dataUser['username']; ?></h4>
            <p class="mb-2"><?php echo $dataUser['Address']; ?></p>
            <p class="mb-2"><?php echo $dataUser['email']; ?></p>
          
            <div class="mb-4 pb-2">
              <button type="button" class="btn btn-outline-primary btn-floating">
                <i class="fab fa-facebook-f fa-lg"><a href ="<?php echo $dataUser['fb']; ?>" target=_blank><img src="images/facebook.png" /></a></i>
              </button>
              <button type="button" class="btn btn-outline-primary btn-floating">
                <i class="fab fa-twitter fa-lg"><a href ="<?php echo $dataUser['twitter']; ?>" target=_blank><img src="images/twitter.png" /></a></i>
              </button>
              <button type="button" class="btn btn-outline-primary btn-floating">
                <i class="fab fa-instagram fa-lg"><a href ="<?php echo $dataUser['insta']; ?>"  target=_blank><img src="images/instagram.png" /></a></i>
              </button>
              
            </div>
            
            <a  class="btn btn-primary btn-rounded btn-lg" href="logout.php" >
             Logout
</a>
            
        
            <div class="d-flex justify-content-between text-center mt-5 mb-2">
              
              
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>



  
 
</section>
<?php include("footer.php") ?>


  
    
</body>


</html>