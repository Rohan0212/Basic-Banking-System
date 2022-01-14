<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <!-- Google Fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">


    <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <title>Banking System</title>

  </head>
  <body style="background-color : #fff;">

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


    <div class="container-fluid">
    <!-- Introduction section -->
          <div class="row" style="background-color : #82E0AA;">
            <div class="col-sm-12 col-md">
              <div class="heading text-center my-5">
                <h1>Welcome to <p>The Sparks Bank</p> </h1>
              </div>
            </div>
            <div class="col-sm-12 col-md img text-center my-5">
              <img src="images/bank_logo.png" class="img-responsive pt-5" height="300">
            </div>
          </div>
          <!-- Activity Section -->
          <div class="row text-center">
                  <div class="col-md my-5">
                    <img src="images/create user.png" class="img-responsive" height="200">
                    <br>
                    <a href="createuser.php"><button type="button" class="btn btn-dark btn-lg">Create a User</button></a>
                  </div>
                  <div class="col-md my-5">
                    <img src="images/transer_money.jpg" class="img-responsive" height="200">
                    <br>
                    <a href="transfermoney.php"><button type="button" class="btn btn-dark btn-lg">Make a Transaction</button></a>
                  </div>
                  <div class="col-md my-5">
                    <img src="images/transaction_history.jpg" class="img-responsive" height="200">
                    <br>
                    <a href="transactionhistory.php"><button type="button" class="btn btn-dark btn-lg">Transaction History</button></a>
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
