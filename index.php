<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Sen:wght@400..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH;  ?>css/style.css">
  <title>Finsweet</title>
</head>
<body>
  <!-- INÍCIO HEADER -->
  <header class="header">
    <div class="container">
      <div class="logo">
        <a href="<?php echo INCLUDE_PATH; ?>"><img src="<?php echo INCLUDE_PATH; ?>assets/logo.svg" alt="Finsweet"></a>
      </div>

      <button class="btn-menu"><img src="<?php echo INCLUDE_PATH; ?>assets/menu.svg" alt="Menu"></button>
      <nav class="menu">
        <ul>
          <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
          <li><a href="<?php echo INCLUDE_PATH; ?>blog">Blog</a></li>
          <li><a href="<?php echo INCLUDE_PATH; ?>about-us">About Us</a></li>
          <li><a href="<?php echo INCLUDE_PATH; ?>contact-us">Contact Us</a></li>
          <li><a class="subscribe" href="<?php echo INCLUDE_PATH; ?>subscribe">Subscribe</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- FIM HEADER -->

  <script src="<?php echo INCLUDE_PATH; ?>js/jquery-3.7.1.min.js"></script>
  <script type="module" src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>
</body>
</html>