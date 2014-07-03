<li class="product">
  <?php
      header('Content-type: text/html; charset=utf-8');
  ?>
  <a data-id="<?php echo $_GET['id'] ?>" class="product-details btn-info"><?php echo $_GET['title']; ?></a>
</li>