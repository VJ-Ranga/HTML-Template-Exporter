<?php
if(isset($_POST['submit'])){
  // Get the selected email template and new image URL from the form input
  $template = $_POST['template'];
  $imageUrl = $_POST['image-url'];

  // Read the selected HTML email template file into a string
  $html = file_get_contents($template);

  // Use PHP DOM to find and update the image source with the new URL
  $dom = new DOMDocument();
  $dom->loadHTML($html);
  $image = $dom->getElementById("Temp-image");
  $image->setAttribute("src", $imageUrl);

  // Export the updated HTML code as a file for download
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename="updated-email.html"');
  echo $dom->saveHTML();
  exit();
}
?>
