<?php
require_once '../inc/head.php';
?>

<!DOCTYPE html>
<html>

<?= head("Collage Images"); ?>

<body>
  <section class="py-10rem text-center">
    <div class="container">
      <h1>Web UI Kits | Collages</h1>
      <hr />
      <div class="grid-1x3">
        <div class="theme-card">
          <div class="thumb-wrapper">
            <img src="images/icons/header.svg" alt="Header icon" />
          </div>
          <div class="footer">
            <a class="theme-btn" href="duo.php">Duo</a>
          </div>
        </div>
        <div class="theme-card">
          <div class="thumb-wrapper">
            <img src="images/icons/header.svg" alt="Header icon" />
          </div>
          <div class="footer">
            <a class="theme-btn" href="tri.php">Tri</a>
          </div>
        </div>
        <div class="theme-card">
          <div class="thumb-wrapper">
            <img src="images/icons/footer.svg" alt="Footer icon" />
          </div>
          <div class="footer">
            <a class="theme-btn" href="quad.php">Quad</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>