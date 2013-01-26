<?php
include($cms["path"].'config.php');
if($_SERVER['REMOTE_ADDR'] == '000.000.000.000'){
  $cms["version"] = 'v70';
} else {
	$cms["version"] = 'v69';
}
$cms["path"] .= $cms["version"].'/';
include($cms["path"].'index.php');
?>
