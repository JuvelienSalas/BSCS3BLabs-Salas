<?php
    $title = "My Portfolio (My Projects)";
    $header = "My Projects";
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
            This page presents some of my programming and school projects.
            It shows the websites and Softwares I have practiced through out my Computer Science Journey
        </p>

        <h2> Projects </h2>
        <ol>
            <li>Open Pages - Website that lets you express what you feel, emotions, and reactions. It's like a freedom wall.</li>
            <li>PrepGrind - AI learning platform for students and interview practice.</li>
            <li>Nursing Portfolio - A website that showcases a nursing student's experiences, clinical hours, skills, achievements, and journey throughout their nursing education.</li>
        </ol>
        
        <img src="images/Open_pages.png" alt="Projects portfolio image">
        <img src="images/PrepGrind.png" alt="Projects portfolio image">
        <img src="images/Nursing_portfolio.png" alt="Projects portfolio image">

        <h3>Navigation</h3>
        <a href="index.php">Home</a> |
        <a href="aboutme.php">About Me</a> |
        <a href="projects.php">My Projects</a>
    </body>
</html>

 