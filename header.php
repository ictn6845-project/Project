<?php
    #session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ICTN6845 Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <link rel="stylesheet" href="styles/menu.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
    </script>
    <script>
        $(function() {
            $(".hamburger").on("click", function() {
                if ($(".links").hasClass("active")) {
                    $(".links").removeClass("active");
                } else {
                    $(".links").addClass("active");
                }
            });
        });
    </script>
</head>


<header>
    <h1 class="logo">Logo</h1>
    <nav>
        <ul class="menu">
            <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li class='home'><a href='index.php'>Home</a></li>";
                    echo "<li class='links'><a href='about.php'>About Us</a></li>";
                    echo "<li class='links'><a href='resv-in.php'>Reservations</a></li>";
                    echo "<li class='links'><a href='includes/logout-inc.php'>Log out</a></li>";
                    echo "<li class='hamburger'><span class='bars'></span></li>";
                }
                else {
                    echo "<li class='links'><a href='index.php'>Home</a></li>";
                    echo "<li class='links'><a href='about.php'>About Us</a></li>";
                    echo "<li class='links'><a href='resv-dis.php'>Reservations</a></li>";
                    echo "<li class='links'><a href='login.php'>Login</a></li>";
                    echo "<li class='links'><a href='signup.php'>Sign up</a></li>";
                    echo "<li class='hamburger'><span class='bars'></span></li>";
                }
            ?>
        </ul>
    </nav>
</header>
<body>
<main>