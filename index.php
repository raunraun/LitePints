<?php

require_once 'include/util.php';
require_once 'include/config.php';

$taps = $GLOBALS['taps'];

$numberOfTaps = sizeof($taps);
$colWidth = floor(100/$numberOfTaps);
?>
<html>
<head>
  <title>Tap List</title>
  <meta http-equiv="refresh" content="300">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<table class="mainTable">
<?php for($i=0; $i<$numberOfTaps; $i++) { ?>
<col width="<?php echo $colWidth; ?>%" />
<?php } ?>
<tr>
 <?php for($i=0; $i<$numberOfTaps; $i++) { ?>
 <td><span class="tapcircle"><?php echo $taps[$i]['number']; ?></span></td>
 <?php } ?>
</tr><tr>
 <?php for($i=0; $i<$numberOfTaps; $i++) { $val = ($taps[$i]['name'] == "") ? "Empty" : $taps[$i]['name'] ?>
 <td><h2><?php echo $val; ?></h2></td>
 <?php } ?>
</tr><tr>
 <?php for($i=0; $i<$numberOfTaps; $i++) { $val = (isset($taps[$i])) ? $taps[$i]['style'] : "--"; ?>
 <td><?php echo $val; ?></td>
 <?php } ?>
</tr><tr>
 <?php for($i=0; $i<$numberOfTaps; $i++) { $val = ($taps[$i]['brewDate'] !="") ? "Brewed ".$taps[$i]['brewDate'] : "--"; ?>
 <td><span><?php echo $val; ?></span></td>
 <?php } ?>
</tr><tr class="glass">
 <?php for($i=0; $i<$numberOfTaps; $i++) { 
         $container = ($taps[$i]['name'] != "") ? $taps[$i]['container'] : "standardpint&empty=yes";
  ?>
 <td>
   <img width="100%" height="100%" src="img/containerSvg.php?container=<?php echo $container; ?>&rgb=<?php echo $taps[$i]['rgb']; ?>" />
 </td>
 <?php } ?>
</tr><tr>
 <?php for ($i=0;$i<$numberOfTaps; $i++) {
         $og = number_format($taps[$i]['og'],3);
         $fg = number_format($taps[$i]['fg'],3);
 ?>
 <td><?php echo "$og - $fg"; ?></td>
 <?php } ?>
</tr><tr>
 <?php for ($i=0;$i<$numberOfTaps; $i++) { ?>
 <td><?php echo $taps[$i]['srm'] . " SRM"; ?></td>
 <?php } ?>
</tr><tr>
 <?php for($i=0; $i<$numberOfTaps; $i++) { ?>
 <td><span><?php echo $taps[$i]['kcal']." kcal per ".$taps[$i]['servingSize']; ?></span></td>
 <?php } ?>
</tr><tr>
 <?php for($i=0; $i<$numberOfTaps; $i++) {
 ?>
 <td><?php echo $taps[$i]['abv']."% ABV<br>".$taps[$i]['unitsEth']." units"; ?></span></td>
 <?php } ?>
</tr><tr>
 <?php for($i=0; $i<$numberOfTaps; $i++) {
         $ibu = (isset($taps[$i])) ? $taps[$i]['ibu'] : "--";
 ?>
 <td><?php echo "$ibu IBU"; ?></td>
 <?php } ?>
</tr>
<tr>
 <?php for($i=0; $i<$numberOfTaps; $i++) { if (isset($taps[$i])) { $val = $taps[$i]['notes']; } else { $o=array(); exec("/usr/games/fortune -an 200",$o); $val = join("\n",$o); } ?>
 <td class="notes"><?php echo $val; ?></td>
 <?php } ?>
</tr>
</table><!-- main table -->
</body>
</html>

