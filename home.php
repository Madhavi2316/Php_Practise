<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:Login.php');
    }
?>
<html>
    <head>
    <title>Home-Page</title>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   
    </head>
    <body>
        <div class="container">
        <h3 class="text-center text-primary">Wlecome <?php echo $_SESSION['username']; ?></h3>
        <a class="btn btn-danger" href="logout.php">LOGOUT</a>
        </div>
    </body>
</html>