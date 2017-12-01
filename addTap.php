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
   
  $tap = array();
  $tap['number'] = tapNo;
  $tap['fullsize'] = 0;
  $tap['currentsize'] = 0;
  $tap['name'] = 0;
  $tap['style'] = 0;
  $tap['brewDate'] = 0;
  $tap['og'] = 0;
  $tap['fg'] = 0;
  $tap['srm'] = 0;
  $tap['ibu'] = 0;
  $tap['container'] = 0;
  $tap['servingSizeValue'] = 0;
  $tap['servingSizeUnits'] = 0;
  $tap['notes'] = '';
  
  $GLOBALS['taps'][$tapNo] = $tap;
  save();
}
?>
</body>
</html>
