<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
    <style type="text/css">
        button{
            position: relative;
    display: inline-block;
    padding: 12px 36px;
    margin: 10px 0;
    color: white;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 18px;
    letter-spacing: 2px;
    border-radius: 8px;
    background-color: #669999;
    background-image: linear-gradient(315deg, #669999 0%, #5e5c5c 74%);
        }
    </style>

</head>


<body>
    <?php
  include 'navbar.php';
  ?>

    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="intro py-1">
            <div >
                <div >
                   <center> <h1 style="font-family:Times New Roman ; color:#5c8a8a">Welcome to Banking System</h1></center>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
            </div>
        </div>
        <!-- Activity section -->
        <div class="row activity text-center">

            <div class="col-md act">
                <br><br><br>
                <img src="img/user1.png" class="img-fluid" style="width: 80% ; height: 60%">
                <br><br>
                <a href="transfermoney.php"><button style="font-family:Times New Roman ;">View all Users</button></a>
            </div>
            <div class="col-md act">
                <br><br>
                <img src="img/transfer.jpg" class="img-fluid" style="width: 70% ; height: 70%">
                <br><br>
                <a href="transfermoney.php"><button style="font-family:Times New Roman ;">Trasfer Money</button></a>
            </div>
            <div class="col-md act">
                <br><br><br>
                <img src="img/his.png" class="img-fluid" style="width: 60% ; height: 60%">
                <br><br>
                <a href="transactionhistory.php"><button style="font-family:Times New Roman ;">History</button></a>
            </div>
           
        </div>
    </div>
    <br> <br> <br> <br><br> <br> <br> <br>
    
    
    <footer class="text-center mt-5 py-2">

        <p>&copy 2021 Made by <b>Ankitha S</b> <br>  Project of  <b>The Sparks Foundation</b></p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
