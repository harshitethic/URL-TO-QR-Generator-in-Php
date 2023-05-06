<?php
include 'header.php';
require_once('phpqrcode/qrlib.php');

if (isset($_POST['url'])) {
  $url = $_POST['url'];
  QRcode::png($url, 'temp/qrcode.png');
}

?>

<div class="container">
  <h1>Generate QR Code</h1>
  <form method="POST">
    <div class="form-group">
      <label for="url">Enter URL:</label>
      <input type="text" class="form-control" id="url" name="url" placeholder="Enter URL">
    </div>
    <button type="submit" class="btn btn-primary">Generate</button>
  </form>
  
  <?php if (isset($_POST['url'])): ?>
    <hr>
    <h2>QR Code:</h2>
    <img src="temp/qrcode.png">
    <a href="temp/qrcode.png" download>Download QR Code</a>
  <?php endif; ?>
</div>

<?php include 'footer.php'; ?>
