<html>
  <head> 
    <link  rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri() ?>"/>
  </head>	
  <body>
    <div class='header'>
      <?php bloginfo('title'); ?>
    </div>


    <?php if (have_posts()): the_post(); ?>

      <p><?php the_title() ?></p>

    <?php endif; ?>

  </body>
</html>

