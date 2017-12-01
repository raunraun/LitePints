<html>
<head>
  <title>Tap List</title>
  <meta http-equiv="refresh" content="300">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php

require_once 'include/config.php';	

if (isset($_GET['number'])) {
  $tapNo = $_GET['number'];

  array_splice($GLOBALS['taps'], $tapNo, 1);
  
  if (save()) {
    header("Location: showTaps.php");
  } else {
    echo "error deleting!";
  }
}
?>
</body>
</html>
