<?php
require_once 'inc/head.php';
?>

<!DOCTYPE html>
<html>

<?= head("Web UI Kits"); ?>

<body>
  <section class="py-10rem text-center">
    <div class="container">
      <h1>Welcome to the Collection of Web UI Kits</h1>
      <hr />
      <div class="grid-1x4">
        <div class="theme-card">
          <div class="thumb-wrapper">
            <img src="images/icons/header.svg" alt="Header icon" />
          </div>
          <div class="footer">
            <a class="theme-btn" href="/header">Header</a>
          </div>
        </div>
        <div class="theme-card">
          <div class="thumb-wrapper">
            <img src="images/icons/footer.svg" alt="Footer icon" />
          </div>
          <div class="footer">
            <a class="theme-btn" href="/footer">Footer</a>
          </div>
        </div>
        <div class="theme-card">
          <div class="thumb-wrapper">
            <img src="images/icons/cards.svg" alt="Cards icon" />
          </div>
          <div class="footer">
            <a class="theme-btn" href="/cards">Cards</a>
          </div>
        </div>
        <div class="theme-card">
          <div class="thumb-wrapper">
            <a href="collages/"><img src="images/icons/collage.svg" alt="Footer icon" /></a>
          </div>
          <div class="footer">
            <a class="theme-btn" href="collages/">Collage</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>