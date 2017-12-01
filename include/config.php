<?php

// 'db' directory must be writable and executable by apache user for php to write
// to files in the directory.
$GLOBALS['InternalDB_Path'] = "db/new.db";

function load() {
  $s = file_get_contents($GLOBALS['InternalDB_Path']);
 
  if($s != false) {
    $GLOBALS['taps'] = unserialize($s);
  }
}

function save() {
  $taps = $GLOBALS['taps'];

  $s = serialize($taps);

  print $GLOBALS['InternalDB_Path'];
  return file_put_contents($GLOBALS['InternalDB_Path'], $s);
}

load();

?>
