<?php
@include('inc/header.php')
?>

<div class="container">
  
  <header><h1><?php echo $data['title']; ?></h1></header>  
  <div class="main p-2">    
      <p>This is the Eshel MVC PHP framework - Please refer to the DOCS on how to use it</p>
      <hr>
      <ul>
      <li>1. Edit: RewriteBase /mvc/public in .htaccess - Change mvc to your folder name</li>
      <li>2. Edit: /app/config/conifg.php lines 2-4 to match your db user/pass/name respectively</li>
      </ul>
  </div>
</div>

<?php
@include('inc/footer.php');




