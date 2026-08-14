<?php
    $title = "My Portfolio";
    $header = "Welcome to My Portfolio";
?>

<html>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <header>
            <h1><?php echo $header; ?></h1>
        </header>

        <p>
            This is my Home Page of my Portfolio Website, it contains my simple information or simple basic information about my website and it should provide links to the other pages.
        </p>

        <img src="images/dog.jpg" alt="Home portfolio image" width="300">

        <h2>Navigation</h2>
        <a href="index.php">Home</a> |
        <a href="aboutme.php">About Me</a> |
        <a href="projects.php">My Projects</a>
    </body>
</html>