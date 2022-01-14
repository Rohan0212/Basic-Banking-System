<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Transfer Money</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

  </head>
  <body style="background-color: #D3DEDC;">
    <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
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

    <div class="container">
            <h2 class="text-center pt-4 my-5" style="color : black;">Transfer Money</h2>
            <br>
                <div class="row">
                    <div class="col">
                        <div class="table-responsive-sm">
                        <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color: white;">
                            <thead style="color : black;">
                                <tr>
                                <th scope="col" class="text-center py-2">Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                        while($rows=mysqli_fetch_assoc($result)){
                    ?>
                        <tr style="color : black;">
                            <td class="py-2"><?php echo $rows['id'] ?></td>
                            <td class="py-2"><?php echo $rows['name']?></td>
                            <td class="py-2"><?php echo $rows['email']?></td>
                            <td class="py-2"><?php echo $rows['balance']?></td>
                            <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn btn-dark btn-lg transact-button">Transact</button></a></td>
                        </tr>
                    <?php
                        }
                    ?>

                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
             </div>
             <footer class="text-center">
               <p> <i> <i class="far fa-copyright"></i></i> 2022. Made by <b>ROHAN KHANDARE</b> <br> GRIP @The Sparks Foundation</p>
             </footer>
             <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
