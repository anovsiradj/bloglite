<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('vendor/autoload.php');
// require('debug.php');

/*
pie nek, ning [avm-include], ono [avm-template]
dadine iso ganti ganti tempat. ning jerone dir templat
ono [avm-section], isine: layout.php karo [avm-content]
ning jero section, [avm-main] isine templat error.php, comment.php, dst

nek iso, cobo ngene: avm->contentParam(core\paramPost $param);
nek iso, cobo ngene: avm->contentParam(core\paramPage $param);
(koyo laravel)
avm
	-helper
	//-content
	- template
 		-darknature
 			-content
 			-layout.php
	-module
		-page.php
		-post.php
*/

use avm\Bloglite as bl;

// set config
// buat koneksi
bl::init();
// new avz()

$content = var_get('content');
if (empty($content)) {
	bl::$type = 'home';
} else {
	if (in_array($content, bl::$config['content'])) {
		bl::$type = $content; //1
	} else {
		bl::$type = 'error';
	}
}
$module = 'avm\\module\\' . $content;

// avz > display()
bl::compile($module);

// debug(avz::$config);
// debug($type);
