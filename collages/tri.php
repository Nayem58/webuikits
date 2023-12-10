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
    <title>Collage Images | Triple Images</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" />

    <!-- External Stylesheets -->
    <link rel="stylesheet" href="../css/main.css" />

    <!-- Other Link Elements -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="py-10rem">
      <div class="container">
        <div class="grid-1x2 mb-3rem">
          <form class="theme-form" id="collageTri">
            <div class="theme-card p-3rem mb-3rem">
              <div class="title">Large Image</div>
              <div class="grid-1x2">
                <div class="input-block">
                  <label for="lg">Src</label>
                  <input
                    type="text"
                    required
                    name="lg"
                    id="lg"
                    placeholder="/images/img-lg.jpg"
                  />
                </div>
                <div class="input-block">
                  <label for="lgAlt">Alt</label>
                  <input
                    type="text"
                    required
                    name="lgAlt"
                    id="lgAlt"
                    placeholder="Large image"
                  />
                </div>
              </div>
            </div>
            <div class="theme-card p-3rem mb-3rem">
              <div class="title">Medium Image</div>
              <div class="grid-1x2">
                <div class="input-block">
                  <label for="md">Src</label>
                  <input
                    type="text"
                    required
                    name="md"
                    id="md"
                    placeholder="/images/img-md.jpg"
                  />
                </div>
                <div class="input-block">
                  <label for="mdAlt"> Alt</label>
                  <input
                    type="text"
                    required
                    name="mdAlt"
                    id="mdAlt"
                    placeholder="Medium image"
                  />
                </div>
              </div>
            </div>
            <div class="theme-card p-3rem mb-3rem">
              <div class="title">Small Image</div>
              <div class="grid-1x2">
                <div class="input-block">
                  <label for="sm">Src</label>
                  <input
                    type="text"
                    required
                    name="sm"
                    id="sm"
                    placeholder="/images/img-sm.jpg"
                  />
                </div>
                <div class="input-block">
                  <label for="smAlt"> Alt</label>
                  <input
                    type="text"
                    required
                    name="smAlt"
                    id="smAlt"
                    placeholder="Small image"
                  />
                </div>
              </div>
            </div>
            <div class="input-block">
              <input
                class="theme-btn mx-auto"
                type="submit"
                value="Generate Code Snippet"
              />
            </div>
          </form>
          <div class="theme-card p-3rem">
            <div class="mb-3rem">
              <img
                src="../images/preview-collage-tri.png"
                alt="Collage of three images"
              />
            </div>
            <div class="input-block">
              <textarea
                name="generateSC"
                id="generateSC"
                cols="30"
                rows="15"
                placeholder="Source Code will be generated here."
              ></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript Files and Scripts -->
    <script>
      // Function to handle form submission
      const form = document.getElementById("collageTri");

      form.addEventListener("submit", function (event) {
        event.preventDefault();

        // Get form values
        const lgSrc = document.getElementById("lg").value;
        const lgAlt = document.getElementById("lgAlt").value;
        const mdSrc = document.getElementById("md").value;
        const mdAlt = document.getElementById("mdAlt").value;
        const smSrc = document.getElementById("sm").value;
        const smAlt = document.getElementById("smAlt").value;

        // Generate HTML code
        let outputHtml = `<div class="grid-collage-tri">
  <div class="thumb-wrapper">
    <img src="${lgSrc}" alt="${lgAlt}" />
  </div>
  <div class="thumb-wrapper">
    <img src="${mdSrc}" alt="${mdAlt}" />
  </div>
  <div class="thumb-wrapper">
    <img src="${smSrc}" alt="${smAlt}" />
  </div>
</div>`;

        // Update output text area
        const outputTextarea = document.getElementById("generateSC");
        outputTextarea.value = outputHtml;
      });
    </script>
  </body>
</html>
