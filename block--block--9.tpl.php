<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="countdown">
    <h2>QUICKIE COUNTDOWN</h2>
    <div class="content"<?php print $content_attributes; ?>>
    <?php
      //$time_now_str = date("h:i");
      $time_now = strtotime(date("m/j/Y h:i:s"));
      $time_elapsed = $time_now - strtotime($_SESSION['quickie_start_time']);
      $minutes_elapsed = (int)($time_elapsed / 60);
      $minutes_remaining = 9 - $minutes_elapsed;
      $seconds_elapsed = $time_elapsed%60;
      $seconds_remaining = 60 - $seconds_elapsed;
      if ($seconds_remaining == 60) {
        $seconds_remaining = 0;
          $minutes_remaining++;
      }
      if (($time_elapsed >= 0) && (($minutes_remaining > 0) || (($minutes_remaining == 0) && ($seconds_remaining > 0)))) {
        print "<div class='minutes-remaining'>".$minutes_remaining."</div>:<div class='seconds-remaining'>".$seconds_remaining."</div>";
        //print "<p>".$_SESSION['quickie_start_time']."</p>";
      }
      else {
        print "Time is up!";
      }
    ?>
    </div>
  </div>
</div>
