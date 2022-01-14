<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Transaction History</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
  </head>
  <body style="background-color : #EDD2F3;">

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
        <h2 class="text-center pt-4 my-5" style="color : black;">Transaction History</h2>

       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>

        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
  </div>

  <footer class="text-center">
    <p> <i> <i class="far fa-copyright"></i></i> 2022. Made by <b>ROHAN KHANDARE</b> <br> GRIP @The Sparks Foundation</p>
  </footer>



  </body>
</html>
