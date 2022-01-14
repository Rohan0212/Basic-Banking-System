<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     <link rel="stylesheet" type="text/css" href="css/table.css">
     <link rel="stylesheet" type="text/css" href="css/createuser.css">
     <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Create User</title>

  </head>
  <body style="background-color : #F2789F;">

  <?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
                echo "<script> alert('User Created!!');
                                window.location='transfermoney.php';
                      </script>";

    }
  }
?>
<!-- Navbar -->

  <nav class="navbar navbar-expand-lg navbar-dark py-3 bg-dark fixed-top">
  <div class="container-fluid">
    <a class="logo1" href="#"><h3><i class="fad fa-university"></h3></i></a>
    <a href="index.php" class="navbar-brand ms-2">Sparks Bank</a>
    <button class="navbar-toggler" data-toggle="collapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsiblenavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="index.php" class="nav-link ms-5"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a href="createuser.php" class="nav-link ms-5"><b>Create User</b></a>
        </li>
        <li class="nav-item">
          <a href="transfermoney.php" class="nav-link ms-5"><b>Transfer Money</b></a>
        </li>
        <li class="nav-item">
          <a href="transactionhistory.php" class="nav-link ms-5"><b>Transaction History</b></a>
        </li>
      </ul>

    </div>

  </nav>

      <h2 class="text-center pt-4 my-5">Create a User</h2>
      <br>
      <div class="background">
      <div class="container">
        <div class="screen">
          <div class="screen-header">
            <div class="screen-header-right">
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
              <div class="screen-header-ellipsis"></div>
            </div>
          </div>
          <div class="screen-body">
            <div class="screen-body-item left">
              <img class="img-fluid" src="images/user3.jpg" style="border: none; border-radius: 50%;">
            </div>
            <div class="screen-body-item">
              <form class="app-form" method="post">
                <div class="app-form-group">
                  <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
                </div>
                <div class="app-form-group">
                  <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
                </div>
                <div class="app-form-group">
                  <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
                </div>
                <br>
                <div class="app-form-group button">
                  <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                  <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="text-center">
      <p> <i> <i class="far fa-copyright"></i></i> 2022. Made by <b>ROHAN KHANDARE</b> <br> GRIP @The Sparks Foundation</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



  </body>
</html>
