<div class="container-fluid">
  <div class="row main-event hidden-sm-down">
    <div class="col-md-3 col-md-offset-1">
      <h2><?php the_title() ?></h2>
      <div class="spacer-20"></div>
      <div class="divider-1"></div>
      <div class="spacer-30"></div>
      <p class="title-2"><?php the_subtitle() ?></p>
    </div>
    <div class="col-md-7">
      <?php epic_post_thumbnail() ?>
    </div>
  </div>
  <div class="row event-snippets">
    <div class="hidden-sm-up event-snippet col-xs-12">
      <div class="spacer-60"></div>
      <div><?php epic_post_thumbnail() ?></div>
      <div class="spacer-20"></div>
      <div class="title-3"><?php the_title() ?></div>
      <div class="title-2"><?php the_subtitle() ?></div>
    </div>
  </div>
</div>
