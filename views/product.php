<?php
include('utils/api_connect.php');

$data = $api['data'];
?>

<div class="swipe_cards">
  <div class="demo__content">
    <div class="demo__card-cont">
      <?php
      foreach ($data as $product) {
        echo '
      <div class="demo__card">
        <div class="demo__card__top brown">
          <div class="demo__card__img" style="background-image : url(' . $product["cover"]["media"]["thumbnails"][0]["url"] . ')"></div>
          <p class="demo__card__name">' . $product['media']['thumbnails']['url'] . '</p>
        </div>
        <div class="demo__card__btm">
          <p class="demo__card__we">Product naam</p>
        </div>
        <div class="demo__card__choice m--reject"></div>
        <div class="demo__card__choice m--like"></div>
        <div class="demo__card__drag"></div>
      </div>
    ';
      }
      ?>
    </div>
    <p class="demo__tip">Swipe left or right</p>
  </div>
</div>