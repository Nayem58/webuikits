document.getElementById("contentForm").addEventListener("submit", (event) => {
  event.preventDefault(); // Prevent the form from submitting the traditional way

  // Get values from form fields
  const h1Value = document.getElementById("h1").value;
  const paragraphValue = document.getElementById("paragraph").value;

  // Create elements and update content
  const commonBlock = document.getElementById("outputBlock");
  commonBlock.querySelector("h1").textContent = h1Value;
  commonBlock.querySelector("p").textContent = paragraphValue;

  // Output to console
  console.clear(); // Clear previous logs
  console.log(commonBlock.outerHTML);
});
