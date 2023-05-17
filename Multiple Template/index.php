<!-- HTML form -->
<html>
  <head></head>
  <body>
    <form id="template-form" action="submit-form.php" method="post">
      <label for="template">Choose a template:</label>
      <select id="template" name="template" required>
        <option value="">Select a template</option>
        <option value="template1.php">Template 1</option>
        <option value="template2.php">Template 2</option>
      </select>
      <br><br>
      <label for="image-url">Enter Image URL:</label>
      <input type="text" id="image-url" name="image-url" required>
      <br><br>
      <input type="submit" name="submit" value="Update Image">
    </form>
  </body>
</html>
