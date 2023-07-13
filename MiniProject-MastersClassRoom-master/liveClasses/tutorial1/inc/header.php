<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-1.5 fixed-top">
    <div class="container">
        <a href="#" class="navbar-brand text-warning">MastersClassRoom</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <i class="bi bi-home"></i>
                    <a href="../../../index.php" class="nav-link selected">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#questions">Questions</a>
                </li>
                <?php
                if (isset($_SESSION["userUid"])){
                   echo' <li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>';
                   echo'<li class="nav-item"><a href="../db/include/logout.inc.php" class="nav-link">LogOut</a></li>';
                }
                // else{
                //     echo'<li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#register" >Signup</a></li>';
                //     echo'<li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#login" >Login</a></li>';
                // }
            ?>
        </ul>
    </div>
</nav>
<br><br>
<section class="p-5">
    <div class="container p-5">
    <ul>
        <li><a href="enrolled.php">Enroll</a></li>
        <li><a href="side.html">Access Material</a></li>
        <li><a href="joinClass.php">Join Class</a></li>

    </ul>
</div>

</section>


 

