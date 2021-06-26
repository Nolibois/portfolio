<?php
function demoScreen(String $link, string $imgPath, string $imgAlt = "démo Portfolio")
{
?>
  <div id="card-5">
    <div class="screen">
      <div class="frame-out">
        <div class="frame-in">
          <a href=<?= $link; ?> target="_blank"><img src=<?= $imgPath; ?> alt=<?= $imgAlt; ?> /></a>
        </div>
      </div>
      <div class="border-bottom"></div>
    </div>
    <div class="foot-mac">
      <div class="foot-up"></div>
      <div class="foot-bottom"></div>
    </div>
  </div>
<?php
}
?>