<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _straps
 * @since _straps 1.0
 */
?>

<div class="row-fluid">
  <div class="span12 well">
    <div class="row-fluid">
      <div class="span8">
        <p class="signup">Stay in touch with us. We promise never to spam you.</p>
      </div>
      <div class="span4">
        <form class="form-inline no-margin pull-right">
          <input type="text" name="email" placeholder="email" />
          <input type="text" class="input-small" name="zipcode" placeholder="zip/province" />
          <button class="btn btn-primary">Sign up</p>
        </form>
      </div>
    </div>
  </div>
</div>

<footer class="footer">
  <div class="row-fluid">
    <div class="span4">
      <ul class="nav nav-list">
        <li class="nav-header">Links</li>
        <?
            $args['container'] = '';
            $args['container_class'] = '';
            $args['menu_class'] = 'footer-menu';
            $args['items_wrap'] = '%3$s';
            $args['theme_location'] = 'footer_col_1';
            $args['walker'] = new menu_walker();
            wp_nav_menu($args)
          ?>
      </ul>
    </div>

    <div class="span4">
      <ul class="nav nav-list">
        <li class="nav-header">Initiatives</li>
          <?
            $args['container'] = '';
            $args['container_class'] = '';
            $args['menu_class'] = 'footer-menu';
            $args['items_wrap'] = '%3$s';
            $args['theme_location'] = 'footer_col_2';
            $args['walker'] = new menu_walker();
            wp_nav_menu($args)
          ?>
      </ul>
    </div>

    <div class="span4">
      <ul class="nav nav-list">
        <li class="nav-header">Locations<li>
          <?
            $args['container'] = '';
            $args['container_class'] = '';
            $args['menu_class'] = 'footer-menu';
            $args['items_wrap'] = '%3$s';
            $args['theme_location'] = 'footer_col_3';
            $args['walker'] = new menu_walker();
            wp_nav_menu($args)
          ?>
      </ul>
    </div>

  </div>
  <div class="row-fluid">
    <p><small>&copy; Copyright 2013 Gangplank Collective</small></p>
  </div>
</footer>
<?php wp_footer(); ?>

</div> <!-- /container -->

<style type="text/css">
  .hero-unit.featured {
    background-image: url(<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $thumb[0] ?>);
    background-size: 1326px 314px;
    <?php if ($thumb) { echo "color: #fff;"; } ?>
  }
</style>


</body>
</html>
