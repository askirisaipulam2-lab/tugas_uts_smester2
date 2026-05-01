<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand">Askir Web</a>

    <ul class="navbar-nav">
      <li class="nav-item"><a href="?page=home" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="?page=about" class="nav-link">About</a></li>
      <li class="nav-item"><a href="?page=contact" class="nav-link">Contact</a></li>
      <li class="nav-item"><a href="?page=studies" class="nav-link">My Studies</a></li>
    </ul>

    <ul class="navbar-nav ms-auto">
      <?php if(isset($_SESSION['user'])): ?>
        <li class="nav-item text-white mt-2 me-2">
          <?= $_SESSION['user']; ?>
        </li>
        <li class="nav-item">
          <a href="auth/logout.php" class="btn btn-danger btn-sm">Logout</a>
        </li>
      <?php else: ?>
        <li class="nav-item">
          <a href="?page=login" class="btn btn-success btn-sm">Login</a>
        </li>
      <?php endif; ?>
    </ul>

  </div>
</nav>