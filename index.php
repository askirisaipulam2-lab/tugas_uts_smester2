<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Web</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- 🔥 LOADER STYLE -->
  <style>
    #loader {
        position: fixed;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, #0d6efd, #6610f2);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        z-index: 9999;
        color: white;
    }

    /* 🔥 WRAPPER */
    .loader-wrapper {
        position: relative;
        width: 100px;
        height: 100px;
    }

    /* 😊 EMOJI (TIDAK GERAK) */
    .emoji {
        font-size: 50px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    /* 🔄 RING ANIMASI */
    .ring {
        width: 100%;
        height: 100%;
        border: 6px solid rgba(255,255,255,0.3);
        border-top: 6px solid white;
        border-radius: 50%;
        animation: spin 1.2s linear infinite;
    }

    @keyframes spin {
        100% { transform: rotate(360deg); }
    }

    /* fade */
    #loader.hide {
        opacity: 0;
        transition: 0.4s;
    }
  </style>
</head>

<body>

<!-- 🔥 LOADING -->
<div id="loader">
  <div class="loader-wrapper">
    <div class="ring"></div>
    <div class="emoji">😊</div>
  </div>
  <p style="margin-top:10px;">Loading Askir...</p>
</div>

<?php
include_once 'koneksi.php';
include_once 'models/Level.php';
include_once 'models/Studies.php';
include_once 'models/Users.php';
?>

<div class="container-fluid">

  <!-- HEADER -->
  <div class="row">
    <div class="col-md-12">
      <?php include_once 'header.php'; ?>
    </div>
  </div>

  <!-- MENU -->
  <div class="row">
    <div class="col-md-12">
      <?php include_once 'menu.php'; ?>
    </div>
  </div>

  <br>

  <!-- CONTENT -->
  <div class="row">
    <div class="col-md-3">
      <?php include_once 'sidebar.php'; ?>
    </div>

    <div class="col-md-9">
      <?php
      if (isset($_GET['hal'])) {
        $req = $_GET['hal'];

        if ($req == 'logout') {
          header("Location: logout.php");
          exit;
        }

        if (file_exists($req . '.php')) {
          include_once $req . '.php';
        } else {
          echo "<h5>Halaman tidak ditemukan</h5>";
        }

      } else {

        if (isset($_SESSION['user'])) {
            include_once 'main.php';
        } else {
            include_once 'home.php';
        }

      }
      ?>
    </div>
  </div>

  <br>

  <!-- FOOTER -->
  <div class="row">
    <div class="col-md-12">
      <?php include_once 'footer.php'; ?>
    </div>
  </div>

</div>

<script src="js/bootstrap.bundle.min.js"></script>

<!-- 🔥 SCRIPT LOADER -->
<script>
window.addEventListener("load", function(){
    const loader = document.getElementById("loader");

    setTimeout(() => {
        loader.classList.add("hide");

        setTimeout(() => {
            loader.style.display = "none";
        }, 400);

    }, 400); // cepat & smooth
});
</script>

</body>
</html>