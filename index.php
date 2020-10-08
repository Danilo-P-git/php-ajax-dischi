<?php
include_once 'partial/head.php';

include_once 'partial/header.php';

 ?>

 <main>
  <div class="container-half">
    <div class="square-container album-list">

    </div>

  </div>
</main>



<script id="album-template" type="text/x-handlebars-template">
  <div class="square color-inside">
    <img src="{{poster}}" alt="">
    <h4>{{title}}</h2>
    <p>{{author}}</p>
    <p><small>{{year}}</small></p>
  </div>
  </script>

 <?php

 include_once 'partial/footer.php';

  ?>
