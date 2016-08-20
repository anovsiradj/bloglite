<?php // 201606282034
use avm\Bloglite as bl;

function bl_data($key)
{
	if (isset(bl::$config[$key])) return bl::$config[$key];
	return null;
}