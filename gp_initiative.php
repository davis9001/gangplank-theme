<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package gp4
 * @since gp4 1.0
 * Template Name: Initiative
 */

get_header(); ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', 'page' ); ?>
  <?php endwhile; // end of the loop. ?>

    <hr/>

    <div class="row-fluid">
      <div class="span12">
        <div class="well">
          <h3>Get Involved!</h3>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
    </div>

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
-->
    <hr/>

    <h2>Upcoming Events</h2>
    <div class="row-fluid event">
      <div class="span1 date"><a href="">April 4</a></div>
      <div class="span2"><a href="">Chandler</a> &raquo; <a href="">Magic Space</a></div>
      <div class="span9"><a href="">Some Random Event</a> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.
      </div>
    </div>
    <div class="row-fluid event">
      <div class="span1 date"><a href="">April 4</a></div>
      <div class="span2"><a href="">Avondale</a> &raquo; <a href="">Magic Space</a></div>
      <div class="span9"><a href="">Some Random Event</a> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.
      </div>
    </div>
    <div class="row-fluid event">
      <div class="span1 date"><a href="">April 4</a></div>
      <div class="span2"><a href="">Chandler</a> &raquo; <a href="">Magic Space</a></div>
      <div class="span9"><a href="">Some Random Event</a> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.
      </div>
    </div>
    <div class="row-fluid event">
      <div class="span1 date"><a href="">April 4</a></div>
      <div class="span2"><a href="">Chandler</a> &raquo; <a href="">Magic Space</a></div>
      <div class="span9"><a href="">Some Random Event</a> - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat.
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12">
        <br/>
        <a href="" class="pull-right">More Events...</a>
      </div>
    </div>
    
    <hr/>

<?php get_footer(); ?>
