<?php
@include('inc/header.php')
?>

<div class="container">
  <header><h1><?php echo $data['title']; ?></h1></header>

  <div class="main p-2">
    <?php echo 'APP_ROOT: ' . APP_ROOT . '<br><br>'; ?>
    <?php echo 'URL_ROOT: ' . URL_ROOT . '<br><br>'; ?>
    <?php echo 'SITE_NAME: ' . SITE_NAME . '<br><br>'; ?>
    <?php echo 'SITE_URL: ' . SITE_URL . '<br><br>'; ?>
  </div>

</div>

<?php
@include('inc/footer.php');