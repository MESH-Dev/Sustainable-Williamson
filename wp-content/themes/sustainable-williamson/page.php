<?php get_header(); ?>

<?php if(have_posts()){while(have_posts()){the_post(); ?>
  <section id="content">
    <div class="container">
      <div class="content-holder"></div>
    </div>
  </section>
  <section id="page-content">
    <div class="container">
      <div class="eight columns">
        <?php the_content(); ?>

      </div>
      <div class="four columns sidebar">
        <p>Duis lobortis massa imperdiet quam. Ut varius tincidunt libero. Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor.

Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Pellentesque commodo eros a enim. Integer tincidunt.

Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Suspendisse enim turpis, dictum sed, iaculis a, condimentum nec, nisi. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.

Ut id nisl quis enim dignissim sagittis. Phasellus gravida semper nisi. Praesent adipiscing.</p>
      </div>

      <?php if(get_field('content_left')) { ?>
        <div class="three columns">
          <?php the_field('content_left'); ?>
        </div>
      <?php } ?>

      <?php if(get_field('content_right')) { ?>
        <div class="three columns">
          <?php the_field('content_right'); ?>
        </div>
      <?php } ?>
    </div>
  </section>
<?php } } ?>

<?php get_footer(); ?>
