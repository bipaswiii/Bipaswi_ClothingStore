<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>
<?php include ('navbar.php'); ?>
<section class="vh-100 bg-image"
  style="background-image: url('images/clothing4.jpg');background-repeat:no-repeat; background-size:100% auto; background-position:ceter top; background-attachment:fixed; height:900px">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3 ">
    <div class="container h-100" >
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6" style="margin:40px">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5" ;>
              <h2 class="text-uppercase text-center mb-5">Login into your account</h2>

              <form method="POST" action="action.php">

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="username" />
                  <label class="form-label" for="form3Example1cg">Username</label>
                </div>

                

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" name="password" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>

                

                

                <div class="d-flex justify-content-center">
                  <button type="submit" name="login"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>
                </div>

                
                   

              </form>
              

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