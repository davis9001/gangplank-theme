<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _straps
 * @since _straps 1.0
 */

get_header(); ?>
    <div class="row-fluid">
      <div class="span4 well">
        <h2 class="text-center">The Movement</h2>
        <p class="movement">
          Lorem ipsum dolor sit amet, <a href="">Philosophy</a> consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="">Manifesto</a>
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non <a href="">Values</a>
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>

      <div class="span4 well">
        <h2 class="text-center">The Place</h2>
        <p class="movement">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p class="text-center">
          <a href="" class="btn btn-danger">Start One!</a>
        </p>
      </div>

      <div class="span4 well">
        <h2 class="text-center">Participate</h2>
        <p class="movement">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
        </p>
        <ul class="nav nav-list">
          <li><a href="">Studios</a></li>
          <li><a href="">Junior</a></li>
          <li><a href="">Local</a></li>
          <li><a href="">Labs</a></li>
        </ul>
        <p class="text-center">
          <a class="btn btn-info">Get Involved!</a>
        </p>
      </div>
    </div>

  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'page' ); ?>
  <?php endwhile; // end of the loop. ?>

    <hr/>
<!--
    <h2>The People</h2>
    <div class="row-fluid">
      <div class="span3 offset1">
        <div class="media">
          <a class="pull-left" href="#">
            <img class="media-object" data-src="holder.js/64x64" src="http://www.gravatar.com/avatar/c9ddd25b4e0d82d7869734a4b944e567">
          </a>
          <div class="media-body">
            <h4 class="media-heading">Jade Meskill</h4>
            Co-Founder, Gangplank Collective
          </div>
        </div>
      </div>

      <div class="span3 offset1">
        <div class="media">
          <a class="pull-left" href="#">
            <img class="media-object" data-src="holder.js/64x64" src="http://www.gravatar.com/avatar/631306e06de9205d62da57cc27bbcc04">
          </a>
          <div class="media-body">
            <h4 class="media-heading">Derek Neighbors</h4>
            Co-Founder, Gangplank Collective
          </div>
        </div>
      </div>

      <div class="span3 offset1">
        <div class="media">
          <a class="pull-left" href="#">
            <img class="media-object" data-src="holder.js/64x64" src="http://www.gravatar.com/avatar/e480aa127b3548eabf4888d48154fcfd">
          </a>
          <div class="media-body">
            <h4 class="media-heading">Trish Gillam</h4>
            Executive Director, Gangplank Collective
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <br/>
        <a href="" class="pull-right">More Gangplankers...</a>
      </div>
    </div>

    <hr/>

    <h2>Our Partners</h2>
    <div class="row-fluid">
      <div class="span3 offset1">
        <div class="media">
          <a class="pull-left" href="#">
            <img class="media-object" data-src="holder.js/64x64" src="http://www.gravatar.com/avatar/fc9ddd25b4e0d82d7869734a4b944e567">
          </a>
          <div class="media-body">
            <h4 class="media-heading">City of Chandler</h4>
            Chandler, Arizona
          </div>
        </div>
      </div>

      <div class="span3 offset1">
        <div class="media">
          <a class="pull-left" href="#">
            <img class="media-object" data-src="holder.js/64x64" src="http://www.gravatar.com/avatar/f631306e06de9205d62da57cc27bbcc04">
          </a>
          <div class="media-body">
            <h4 class="media-heading">City of Avondale</h4>
            Avondale, Arizona
          </div>
        </div>
      </div>

      <div class="span3 offset1">
        <div class="media">
          <a class="pull-left" href="#">
            <img class="media-object" data-src="holder.js/64x64" src="http://www.gravatar.com/avatar/fe480aa127b3548eabf4888d48154fcfd">
          </a>
          <div class="media-body">
            <h4 class="media-heading">intel</h4>
            Chandler, Arizona
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <br/>
        <a href="" class="pull-right">More Partners...</a>
      </div>
    </div>

-->
    <hr/>

<?php get_footer(); ?>
