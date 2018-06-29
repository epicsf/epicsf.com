<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package EpicSF
 * @since EpicSF 1.0
 */
?>
      <div class='push'></div>
    </div><!-- .site-content -->

    <footer id="footer" class="site-footer">
      <nav class="navbar container-fluid">
        <div class="row">
          <div class="col-md-9 col-sm-7 col-xs-12">
        <div class="row">
        <?php if ( has_nav_menu( 'footer-about-us' ) ) : ?>
          <div class="col-md-3 col-sm-6">
            <strong class="hidden-sm-down">About Us</strong>
            <a href="/about" class="hidden-md-up"><strong>About Us</strong></a>
            <a href="/sunday-gathering" class="hidden-md-up"><strong>Sunday Gathering</strong></a>
            <div class="hidden-sm-down" aria-label="<?php esc_attr_e( 'Footer About Us Menu', 'epic' ); ?>">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'footer-about-us',
                  'menu_class'     => 'nav navbar-nav',
                 ) );
              ?>
            </div>
          </div>
        <?php endif; ?>
        <?php if ( has_nav_menu( 'footer-media' ) ) : ?>
          <div class="col-md-3 col-sm-6">
            <strong class="hidden-sm-down">Media</strong>
            <a href="/media" class="hidden-md-up"><strong>Media</strong></a>
            <div class="hidden-sm-down" aria-label="<?php esc_attr_e( 'Footer Media Menu', 'epic' ); ?>">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'footer-media',
                  'menu_class'     => 'nav navbar-nav',
                 ) );
              ?>
            </div>
          </div>
        <?php endif; ?>
        <?php if ( has_nav_menu( 'footer-get-connected' ) ) : ?>
          <div class="col-md-3 col-sm-6">
            <strong class="hidden-sm-down" data-abbrev="Connect">Get Connected</strong>
            <a href="/get-connected" class="hidden-md-up"><strong>Get Connected</strong></a>
            <div class="hidden-sm-down" aria-label="<?php esc_attr_e( 'Footer Get Connected Menu', 'epic' ); ?>">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'footer-get-connected',
                  'menu_class'     => 'nav navbar-nav',
                 ) );
              ?>
            </div>
          </div>
        <?php endif; ?>
        <?php if ( has_nav_menu( 'footer-ministries' ) ) : ?>
          <div class="col-md-3 col-sm-6">
            <strong class="hidden-sm-down">Ministries</strong>
            <a href="/ministries" class="hidden-md-up"><strong>Ministries</strong></a>
            <div class="hidden-sm-down" aria-label="<?php esc_attr_e( 'Footer Ministries Menu', 'epic' ); ?>">
              <?php
                wp_nav_menu( array(
                  'theme_location' => 'footer-ministries',
                  'menu_class'     => 'nav navbar-nav',
                 ) );
              ?>
            </div>
          </div>
        <?php endif; ?>
        </div> <!-- .row -->
        </div> <!-- .col-md-9 -->
        <div class="col-md-3 col-sm-5 col-xs-12 aside-content">
          <div class="row">
            <div class="col-md-5">
              <a href="/giving"><strong>Giving</strong></a>
            </div> <!-- .col-md-5 -->
            <div class="col-md-7">
              <a href="/sunday-gathering#contact"><strong>Contact</strong></a>
            </div> <!-- .col-md-7 -->
          </div> <!-- .row -->
          <div class="row social-links">
            <div class="col-md-2 col-xs-3">
              <a href="https://www.facebook.com/epicsf"><i class="fa fa-lg fa-facebook"></i> <span class="sr-only">facebook</span></a>
            </div> <!-- .col-md-2 -->
            <div class="col-md-2 col-xs-3">
              <a href="https://twitter.com/EpicChurchSF"><i class="fa fa-lg fa-twitter"></i> <span class="sr-only">twitter</span></a>
            </div> <!-- .col-md-2 -->
            <div class="col-md-2 col-xs-3">
              <a href="https://www.instagram.com/epicchurchsf"><i class="fa fa-lg fa-instagram"></i> <span class="sr-only">instagram</span></a>
            </div> <!-- .col-md-2 -->
          </div> <!-- .row -->
          <div class="row">
            <div class="col-md-12 service-times">
              <p>
                Join us at:<br> <strong>9:00am</strong>, <strong>10:30am</strong> or <strong>12:00pm</strong>
                <br>
                <em>250 Stevenson Street, SF</em>
              </p>
            </div> <!-- .col-md-12 -->
          </div> <!-- .row -->
        </div> <!-- .col-md-3 -->
        </div> <!-- .row -->
      </nav>
      <div class="site-info">
      </div><!-- .site-info -->
    </footer><!-- .site-footer -->
  </div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script async src="https://player.vimeo.com/api/player.js"></script>
<script>window.Tether = {};</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script>
$('.carousel').carousel({interval: 10000});
$('#prayerModal').on('show.bs.modal', function(e) {
  var button = $(e.relatedTarget);
  var post = button.parents('.forty-day');
  var title = post.find('.title-2');
  var body = post.find('.forty-day-content');
  var modal = $(this);
  modal.find('#prayerModalLabel').html(title.text());
  modal.find('.modal-body').html(body.html());
});
</script>
<script>
    jQuery(function() {
    var days, goLive, hours, intervalId, minutes, seconds;

    // Your churchonline.org url
    var churchUrl = "https://epicsf.churchonline.org"

    goLive = function() {
      if (!intervalId) {
        $('#churchonline_counter').fadeTo('slow', 1);
      }
      $("#churchonline_counter .countdown").hide();
      $("#churchonline_counter .msg").hide();
      $("#churchonline_counter .live").show();
    };
    var loadCountdown = function(data){
      var secondsTill, date, dateString;
      if (data.response.item.isLive) {
        return goLive();
      } else {
        // Parse ISO 8601 date string
        date = data.response.item.eventStartTime.match(/^(\d{4})-0?(\d+)-0?(\d+)[T ]0?(\d+):0?(\d+):0?(\d+)Z$/)
        dateString = date[2] + "/" + date[3] + "/" + date[1] + " " + date[4] + ":" + date[5] + ":" + date[6] + " +0000"

        function updateTime() {
          secondsTill = ((new Date(dateString)) - (new Date())) / 1000;
          days = Math.floor(secondsTill / 86400);
          hours = Math.floor((secondsTill % 86400) / 3600);
          minutes = Math.floor((secondsTill % 3600) / 60);
          seconds = Math.floor(secondsTill % 60);

          if (--seconds < 0) {
            seconds = 59;
            if (--minutes < 0) {
              minutes = 59;
              if (--hours < 0) {
                hours = 23;
                if (--days < 0) {
                  days = 0;
                }
              }
            }
          }
          if (days === 0) {
            $("#churchonline_counter .days").parent().hide();
          } else {
            $("#churchonline_counter .days").html(days);
          }
          $("#churchonline_counter .hours").html((hours.toString().length < 2 ? "0" + hours : hours));
          $("#churchonline_counter .minutes").html((minutes.toString().length < 2 ? "0" + minutes : minutes));

          if (!intervalId) {
            $('#churchonline_counter').fadeTo('slow', 1);
          }

          if (seconds === 0 && minutes === 0 && hours === 0 && days === 0) {
            goLive();
            return clearInterval(intervalId);
          }
        }
        updateTime();
        intervalId = setInterval(updateTime, 30000);
      }
    }
    days = void 0;
    hours = void 0;
    minutes = void 0;
    seconds = void 0;
    intervalId = void 0;
    eventUrl = churchUrl + "/api/v1/events/current"
    msie = /msie/.test(navigator.userAgent.toLowerCase())
    if (msie && window.XDomainRequest) {
        var xdr = new XDomainRequest();
        xdr.open("get", eventUrl);
        xdr.onload = function() {
          loadCountdown(jQuery.parseJSON(xdr.responseText))
        };
        xdr.send();
    } else {
      $.ajax({
        url: eventUrl,
        dataType: "json",
        crossDomain: true,
        success: function(data) {
          loadCountdown(data);
        },
        error: function(xhr, ajaxOptions, thrownError) {
          goLive();
          return console.log(thrownError);
        }
      });
    }
  });
</script>
</body>
</html>
