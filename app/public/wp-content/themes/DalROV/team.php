<?php /* Template Name: Team */ ?>
<html>
<head lang="en">

    <title>Dal ROV About</title>
    
</head>

<body class="main_body">

    <header>
    <?php get_header(); ?>
    <h1>Team Members</h1>
    </header>
    <main>
    <div class="teamPhotos">
    <?php
        $images = get_images("Team Member","thumbnail",4);
        foreach($images as $image){

            echo "<img class= 'teamPhoto'  src='" . $image[0] . "' alt='alt Text'>";

        }
        ?>
        </div>
    </main>
    <footer>



    </footer>
</body>


</html>