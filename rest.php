<?php
$taps = array();
$db = new SQLite3('db/db.db');
$r = $db->query("select count(*) from taps");
$row = $r->fetchArray(SQLITE3_ASSOC);
$tapCount = $row['count(*)'];

$r = $db->query("select * from taps order by number");

$dbdump = array();
while ($row = $r->fetchArray(SQLITE3_ASSOC)) {
  $dbdump[] = $row;
}

echo json_encode($dbdump);

?>
