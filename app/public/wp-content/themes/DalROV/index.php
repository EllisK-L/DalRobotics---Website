<html>
<head lang="en">

    <title>Dal ROV Home</title>
    
</head>

<body class="main_body">

    <header>
    <?php get_header(); ?>
    </header>
    <main>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <?php 
                  $img = get_images("Slide 1");
                  echo "<img class= 'slide_show'  src='" . $img[0][0] . "' alt='First slide'>";
                  ?>
            </div>
            <div class="carousel-item">
               <?php 
                  $img = get_images("Slide 2");
                  echo "<img class= 'slide_show' src='" . $img[0][0] . "' alt='Second slide'>";
                  ?>
            </div>
            <div class="carousel-item">
               <?php 
                  $img = get_images("Slide 3");
                  echo "<img class= 'slide_show' src='" . $img[0][0] . "' alt='Third slide'>";
                  ?>
            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
      <div class=main_container>
      <div class=page_content>
       <?php 
            $post_home = get_page_by_title("Home Page"); 
            $home_content = $post_home->post_content;
            echo $home_content;
        ?>
        </div>
        <div class="most_recent_post">
            <h1 class="most_recent_post_h1">Recent Post</h1>
            <hr>
        <?php
    $args = array(
        'post_type' => 'post'
    );

    $post_query = new WP_Query($args);
if($post_query->have_posts() ) {
  while($post_query->have_posts() ) {
   $counter++;
   if($counter > 1){
      break;
   }
    $post_query->the_post();
    ?>
             <div class="post_container_home">

            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
         </div>
    <?php
  }
}
?>
        </div>

    </main>
    <footer>



    </footer>
</body>


</html>