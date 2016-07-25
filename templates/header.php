<?php
  // This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
  // somewhere in your theme.
?>

<header class="banner navbar navbar-inverse navbar-static-top" role="banner">
    <div class="container">
        <div class="navbar-header" id="main-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=33&amp;txt=350%C3%97150&amp;w=350&amp;h=150"></a>
        </div>

        <nav class="collapse navbar-collapse" role="navigation">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
          endif;
          ?>
        </nav>
    </div>
</header>