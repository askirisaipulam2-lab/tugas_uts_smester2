<?php if(isset($_SESSION['user'])){ ?>
    <h5>Selamat datang, <?= $_SESSION['user']; ?> 👋</h5>
<?php } ?>