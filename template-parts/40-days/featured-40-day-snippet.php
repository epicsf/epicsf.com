<div class="container-fluid">
  <div class="row main-event hidden-sm-down forty-day" data-id="<?php echo slugify(the_title('', '', false)) ?>">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3 col-md-offset-1">
          <div class="spacer-60"></div>
          <h2><?php the_title() ?></h2>
          <div class="spacer-20"></div>
          <div class="divider-1"></div>
          <div class="spacer-30"></div>
          <p class="title-2"><?php the_subtitle() ?></p>
        </div>
        <div class="col-md-7">
          <?php epic_40_day_prayer_post_thumbnail(false) ?>
        </div>
      </div>
      <div class="row">
        <div class="spacer-60"></div>
        <div class="col-md-7 col-md-offset-4">
          <div class="forty-day-content">
            <p class="forty-day-entry-content body2"><?php $post = get_post(); echo $post->post_content; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row event-snippets forty-day" data-id="<?php echo slugify(the_title('', '', false)) ?>">
    <div class="hidden-sm-up event-snippet col-xs-12">
      <div class="spacer-60"></div>
      <div><?php epic_40_day_prayer_post_thumbnail() ?></div>
      <div class="title-2"><?php the_subtitle() ?></div>
      <div class="title-3"><?php the_title() ?></div>
      <div class="forty-day-content" hidden>
        <p class="forty-day-entry-content body2"><?php $post = get_post(); echo $post->post_content; ?></p>
      </div>
    </div>
  </div>
</div>
