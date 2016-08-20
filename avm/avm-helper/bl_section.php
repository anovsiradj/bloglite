<?php
use avm\Bloglite as bl;

function bl_section($name)
{
	$file = bl::$template_path . 'avm-section/avm-' . $name . '.php';
	bl::load($file);
}
