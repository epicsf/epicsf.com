<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage EpicSF
 * @since EpicSF 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" class="<?php echo implode(' ', get_post_class(basename(get_permalink()))); ?>">
  <header class="entry-header container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-2 col-xs-12">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
      </div>
    </div>
  </header><!-- .entry-header -->

  <div class="entry-content container-fluid">
    <?php the_content(); ?>

    <?php if (get_the_title() === 'Get Connected'): ?>
<div class="row event-previews">
  <div class="col-md-offset-2 col-md-4 col-xs-12">
    <?php $get_connected_events = epic_get_events(); ?>
    <?php foreach(array_slice($get_connected_events, 0, 3) as $post): ?>
        <?php echo epic_post_thumbnail() ?>
    <?php endforeach; ?>
  </div>
  <div class="col-md-6 col-xs-12 heading">
    <h1 class="variation">Upcoming Events</h1>
    <a href="/events" class="btn btn-sm">View All</a>
  </div>
</div>
<div class="row epic-info-hero">
  <div class="col-md-3 col-md-offset-1 col-xs-12">
    <h3>Sunday Gathering</h3>
    <div class="body1">250 Stevenson Street</div>
    <div class="body2">Visit the Info Table after the service for parking reimbursement at the Jessie Square Garage.</div>
    <div class="spacer-40"></div>
    <a href="/sunday-gathering" class="link">Join Us</a>
  </div>
  <div class="col-md-6 col-md-offset-1 col-xs-12">
   <div class="time">
    <span class="service-time">9:30<span class="meridiem">AM</span></span> <span class="service-time">11:00<span class="meridiem">AM</span></span>
   </div>
  </div>
</div>
    <?php endif; ?>
  </div><!-- .entry-content -->

</article><!-- #post-## -->
