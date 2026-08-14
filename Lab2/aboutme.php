<?php
    $title = "My Portfolio (About ME)";
    $header = "About Me";
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
            This page tells you more about me, my background, my interests,
            and the skills I am developing as a Computer Science student.
        </p>

        <h2>My interest</h2>
        <ul>
            <li>Likes to play Sports</li>
            <li>Likes to watch movies</li>
            <li>Likes to go out and explore new places</li>
        </ul>

        <img src="images/jubs.jpg" alt="About me portfolio image" width="300">

        <h2>Navigation</h2>
        <a href="index.php">Home</a> |
        <a href="aboutme.php">About Me</a> |
        <a href="projects.php">My Projects</a>
    </body>
</html>