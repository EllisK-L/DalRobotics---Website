<?php /* Template Name: Team */ ?>
<html>
<head lang="en">

    <title>Dal ROV About</title>
    
</head>

<body class="main_body">

    <header>
    <?php get_header(); ?>
    <h1 class="page_header">Team Members</h1>
    </header>
    <main>
    <div class="teamPhotos">
    <?php
        $images = get_images("Team Member","thumbnail",4);
        foreach($images as $image){
            
            echo "<div class='team_photo'>";
            echo "<h2>". get_the_title($image[5]) ."</h2>";
            echo "<img class= 'teamPhoto'  src='" . $image[0] . "' alt='alt Text'>";
            echo "<h3>". $image[5]->post_content ."</h3>";
            echo "</div>";
        };
        ?>
        </div>
    </main>
    <footer>



    </footer>
</body>


</html>