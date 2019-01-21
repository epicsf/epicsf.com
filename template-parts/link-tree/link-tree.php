<div class="spacer-30"></div>

<div class="col-md-6 col-md-offset-3 link-tree col-xs-12">

<?foreach ( get_post_custom() as $key => $value ) { ?>
  <?php if ( strpos($key, '_') === 0 ) { continue; } ?>
  <a class="btn btn-block" href="<?php echo trim( $value[0] ); ?>">
    <?php echo $key; ?>
  </a>
  <div class="spacer-20"></div>
<?php } ?>

</div>
