<?php

?>

<nav class="navbar navbar-dark bg-dark mb-3">
<div class="container">
<a class="navbar-brand" href="<?php echo '/'.SITE_NAME ?>"><?php echo ucwords(SITE_NAME); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo SITE_URL;?>/pages/">Home</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo SITE_URL; ?>/pages/about">About</a>
      </li>      
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo SITE_URL;?>/users/register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo SITE_URL;?>/users/login">Login</a>
      </li>
    </ul>
  </div>
</div>
</nav>

