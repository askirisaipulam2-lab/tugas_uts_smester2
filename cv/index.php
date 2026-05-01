<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Personal Web</title>
  <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.0/dist/lux/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<div class="container-fluid mt-3">
  <div class="row">

    <!-- SIDEBAR -->
    <div class="col-md-3">
      <?php include 'sidebar.php'; ?>
    </div>

    <!-- MAIN -->
    <div class="col-md-9">
      <?php include 'main.php'; ?>
    </div>

  </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>