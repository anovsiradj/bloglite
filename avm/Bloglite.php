<?php // 201606280145, 201606282056
namespace avm;

use avm\core\IMain;

class Bloglite implements IMain
{
	public static $config;
	public static $type;
	public static $module;
	public static $template_path;
	public static $data;
 
	public static function init()
	{
		static::$config = require('avm-config.php');
		static::$config['bl_version'] = 'v1.0-Apha.Dev';
		static::$config['bl_name'] = 'BlogLite';
		static::$config['bl_tagline'] = 'Another blogging platform inpirated by Blogger and WordPress.';
		/* koneksi */
		static::$template_path = 'avm-template/avm-' . static::$config['template'] . '/';
		foreach (static::$config['helper'] as $name) {
			static::helper($name);
		}
	}

	public static function helper($name)
	{
		$file = 'avm/avm-helper/'. $name. '.php';
		incl($file, true);
	}

	public static function load($file, $once = false)
	{
		incl($file, $once);
	}

	public static function compile()
	{
		$layout = static::$template_path . 'avm-layout.php';
		incl($layout);
	}
}
// Prevents access to $this/self from included files.
function incl($file, $once = false)
{
	if ($once) include_once($file);
	else include($file);
}
