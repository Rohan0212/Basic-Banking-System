<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }



    // constraint to check insufficient balance.
    else if($amount > $sql1['balance'])
    {

        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }



    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Zero value cannot be transferred')";
         echo "</script>";
     }


    else {

                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);


                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);

                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transactionhistory.php';
                           </script>";

                }

                $newbalance= 0;
                $amount =0;
        }

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Transaction</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
  </head>
  <body style="background-color: #D3DEDC;">

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
        <h2 class="text-center pt-4 my-5" style="color : black;">Transaction</h2>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr style="color : black;">
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr style="color : black;">
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label style="color : black;"><b>Transfer To:</b></label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >

                    <?php echo $rows['name'] ;?> (Balance:
                    <?php echo $rows['balance'] ;?> )

                </option>
            <?php
                }
            ?>
        </select>
        <br>
        <br>
            <label style="color : black;"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required>
            <br><br>
            <div class="text-center py-4" >
              <button class="btn btn-primary " name="submit" type="submit" id="btn"><h4>Transfer</h4></button>
            </div>
        </form>
    </div>

    <footer class="text-center">
      <p> <i> <i class="far fa-copyright"></i></i> 2022. Made by <b>ROHAN KHANDARE</b> <br> GRIP @The Sparks Foundation</p>
    </footer>




  </body>
</html>
