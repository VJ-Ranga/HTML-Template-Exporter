<?php
if(isset($_POST['submit'])){
  // Get the new image URL from the form input
  $imageUrl = $_POST['image-url'];

  // Read the HTML email template file into a string
  $html = file_get_contents("email-template.html");

  // Use PHP DOM to find and update the image source with the new URL
  $dom = new DOMDocument();
  $dom->loadHTML($html);
  $image = $dom->getElementById("Temp-image");
  $image->setAttribute("src", $imageUrl);

  // Remove the form element from the DOM
  //$form = $dom->getElementById("image-form");
  //$form->parentNode->removeChild($form);

  // Export the updated HTML code as a file for download
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename="updated-email.html"');
  echo $dom->saveHTML();
  exit();
}
?>

<!-- HTML form -->
<html>
  <head></head>
  <body>
    <form id="image-form" action="submit-form.php" method="post" enctype="multipart/form-data">
      <label for="image-url">Enter Image URL:</label>
      <input type="text" id="image-url" name="image-url" required>
      <input type="submit" name="submit" value="Update Image">
    </form>
  </body>
</html>
