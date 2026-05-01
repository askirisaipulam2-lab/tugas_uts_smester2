<?php
$page = $_GET['page'] ?? 'home';

switch($page){
  case 'about':
    include 'pages/about.php';
    break;
  case 'contact':
    include 'pages/contact.php';
    break;
  case 'studies':
    include 'studies/list_studies.php';
    break;
  case 'login':
    include 'auth/login.php';
    break;
  default:
    include 'pages/home.php';
}
?>