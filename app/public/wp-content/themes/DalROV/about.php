<?php /* Template Name: About */ ?>
<html>
<head lang="en">

    <title>Dal ROV About</title>
    
</head>

<body class="main_body">

    <header>
    <?php get_header(); ?>
    </header>
    <main>
      <div class=main_container>
      <div class=page_content>
       <?php 
            $post_home = get_page_by_title("About"); 
            $home_content = $post_home->post_content;
            echo $home_content;
        ?>
        </div>
        <div class="image">
            
        </div>

    </main>
    <!-- <div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>
<h1>Hello, YES</h1> -->
    <footer>



    </footer>
</body>


</html>