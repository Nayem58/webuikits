<!DOCTYPE html>
<html>

<head>
  <!-- Essential Meta Tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="A collection of web UI kits." />
  <!-- <meta name="keywords" content="keyword1, keyword2, keyword3" />
    <meta name="author" content="Your Name" /> -->
  <meta name="robots" content="index, follow" />

  <!-- Page Title -->
  <title>Collage Images | Quadruple Images</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico" />

  <!-- External Stylesheets -->
  <link rel="stylesheet" href="../css/main.css" />

  <!-- Other Link Elements -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="py-10rem">
    <div class="container">
      <div class="grid-1x2 mb-3rem">
        <form class="theme-form" id="collageTri">
          <div class="theme-card p-3rem mb-3rem">
            <div class="title">Top Left</div>
            <div class="grid-1x2">
              <div class="input-block">
                <label for="topLeftSrc">Src</label>
                <input type="text" required name="topLeftSrc" id="topLeftSrc" placeholder="/images/img-top-left.jpg" />
              </div>
              <div class="input-block">
                <label for="topLeftAlt">Alt</label>
                <input type="text" required name="topLeftAlt" id="topLeftAlt" placeholder="Top Left" />
              </div>
            </div>
          </div>
          <div class="theme-card p-3rem mb-3rem">
            <div class="title">Top Right</div>
            <div class="grid-1x2">
              <div class="input-block">
                <label for="topRightSrc">Src</label>
                <input type="text" required name="topRightSrc" id="topRightSrc" placeholder="/images/img-top-right.jpg" />
              </div>
              <div class="input-block">
                <label for="topRightAlt"> Alt</label>
                <input type="text" required name="topRightAlt" id="topRightAlt" placeholder="Top Right" />
              </div>
            </div>
          </div>
          <div class="theme-card p-3rem mb-3rem">
            <div class="title">Bottom Left</div>
            <div class="grid-1x2">
              <div class="input-block">
                <label for="bottomLeftSrc">Src</label>
                <input type="text" required name="bottomLeftSrc" id="bottomLeftSrc" placeholder="/images/img-bottom-left.jpg" />
              </div>
              <div class="input-block">
                <label for="bottomLeftAlt"> Alt</label>
                <input type="text" required name="bottomLeftAlt" id="bottomLeftAlt" placeholder="Bottom Left" />
              </div>
            </div>
          </div>
          <div class="theme-card p-3rem mb-3rem">
            <div class="title">Bottom Right</div>
            <div class="grid-1x2">
              <div class="input-block">
                <label for="bottomRightSrc">Src</label>
                <input type="text" required name="bottomRightSrc" id="bottomRightSrc" placeholder="/images/img-bottom-right.jpg" />
              </div>
              <div class="input-block">
                <label for="bottomRightAlt"> Alt</label>
                <input type="text" required name="bottomRightAlt" id="bottomRightAlt" placeholder="Bottom Right" />
              </div>
            </div>
          </div>
          <div class="input-block">
            <input class="theme-btn mx-auto" type="submit" value="Generate Code Snippet" />
          </div>
        </form>
        <div class="theme-card p-3rem">
          <div class="mb-3rem">
            <img src="../images/preview-collage-quad.png" alt="Collage of four images" />
          </div>
          <div class="input-block">
            <textarea name="generateSC" id="generateSC" cols="30" rows="25" placeholder="Source Code will be generated here."></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Function to handle form submission
    const form = document.getElementById("collageTri");

    form.addEventListener("submit", function(event) {
      event.preventDefault();

      // Get form values
      const topLeftSrc = document.getElementById("topLeftSrc").value;
      const topLeftAlt = document.getElementById("topLeftAlt").value;

      const topRightSrc = document.getElementById("topRightSrc").value;
      const topRightAlt = document.getElementById("topRightAlt").value;

      const bottomLeftSrc = document.getElementById("bottomLeftSrc").value;
      const bottomLeftAlt = document.getElementById("bottomLeftAlt").value;

      const bottomRightSrc = document.getElementById("bottomRightSrc").value;
      const bottomRightAlt = document.getElementById("bottomRightAlt").value;

      // Generate HTML code
      let outputHtml = `<section class="py-10rem text-center">
  <div class="container">
    <div class="grid-collage-quad">
      <div class="thumb-wrapper">
        <img src="${topLeftSrc}" alt="${topLeftAlt}" />
      </div>
      <div class="thumb-wrapper">
        <img src="${topRightSrc}" alt="${topRightAlt}" />
      </div>
      <div class="thumb-wrapper">
        <img src="${bottomLeftSrc}" alt="${bottomLeftAlt}" />
      </div>
      <div class="thumb-wrapper">
        <img src="${bottomRightSrc}" alt="${bottomRightAlt}" />
      </div>
    </div>
  </div>
</section>`;

      // Update output text area
      const outputTextarea = document.getElementById("generateSC");
      outputTextarea.value = outputHtml;
    });
  </script>
</body>

</html>