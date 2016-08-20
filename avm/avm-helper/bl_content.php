<?php
use avm\Bloglite as bl;

function bl_content()
{
	if (bl::$type === 'error') {
		bl_section('error');
	} else {
		bl_section(bl::$type);
	}
}
