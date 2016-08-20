<?php
use avm\Bloglite as bl;

function bl_type($name = null)
{
	if (empty($name)) {
		return bl::$type;
	} else {
		if (bl::$type === $name) {
			return true;
		}
		return false;
	}
}
