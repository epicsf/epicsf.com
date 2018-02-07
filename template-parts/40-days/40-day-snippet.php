<div class="forty-day">
  <div><?php epic_40_day_prayer_post_thumbnail() ?></div>
  <div class="title-2"><?php the_subtitle() ?></div>
  <div class="title-3"><?php the_title() ?></div>
  <div class="forty-day-content" hidden>
    <p class="forty-day-entry-content body2"><?php $post = get_post(); echo $post->post_content; ?></p>
  </div>
  <div class="spacer-20"></div>
  <div class="spacer-20"></div>
</div>
