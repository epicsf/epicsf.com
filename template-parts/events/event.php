<article id="post-<?php the_ID(); ?>" class="event-detail <?php echo implode(' ', get_post_class(basename(get_permalink()))); ?>">
  <div class="entry-content container-fluid">
    <div class="row event-header">
      <div class="col-md-4 col-md-offset-1 col-xs-12">
        <a href="/events" class="link">Back to all events</a>
        <div class="spacer-140 hidden-xs-down"></div>
        <div class="spacer-20 hidden-sm-up"></div>
        <div class="title-2"><?php
        $month = epic_event_month(the_subtitle(null, null, false));

        if (!$month) {
          $month = epic_event_month(get_the_content());
        }
        echo $month;
        ?>
        </div>
        <h1 class="variation">Events</h1>
        <div class="divider-1"></div>
        <div class="spacer-20 hidden-sm-up"></div>
      </div>
      <div class="col-md-6 col-xs-12">
        <div>
          <?php epic_post_thumbnail() ?>
        </div>
      </div>
    </div> <!-- row -->
    <div class="row">
      <div class="col-md-6 col-md-offset-5 col-xs-12">
        <div class="spacer-60"></div>
        <div class="title-3">Event</div>
        <div class="spacer-20"></div>
        <?php the_title( '<h1 class="variation">', '</h1>' ); ?>
        <div class="spacer-20"></div>
        <div class="title-3">Event Details</div>
        <div class="spacer-20"></div>
        <?php the_content() ?>
      </div>
    </div>

  </div><!-- .entry-content -->

</article><!-- #post-## -->
