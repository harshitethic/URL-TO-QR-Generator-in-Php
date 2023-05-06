<!DOCTYPE html>
<html>
<head>
  <title>QR Code Generator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
  <h1>QR Code Generator</h1>
  <form action="generate.php" method="POST">
    <div class="form-group">
      <label for="url">Enter URL:</label>
      <input type="text" class="form-control" id="url" name="url" placeholder="Enter URL">
    </div>
    <button type="submit" class="btn btn-primary">Generate</button>
  </form>
</div>

<?php include 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
