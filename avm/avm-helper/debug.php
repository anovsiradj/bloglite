<?php
function debug($dat = null, $dump = false, $stop = true)
{
	echo "<pre>";
	if($dump) var_dump($dat);
	else print_r($dat);
	echo "</pre>";
	if($stop) die();
}