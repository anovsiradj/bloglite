<?php // 201606280121

// blog info
$config['title'] = 'BlogLite';
$config['description'] = 'another blog inpirated by blogger and wordpress';

$config['template'] = 'darknature';

// home/main/index/base url
$config['url'] = '//'.$_SERVER['HTTP_HOST'].'/bloglite/';

// database credential
$config['db_host'] = 'localhost';
$config['db_user'] = 'root';
$config['db_pass'] = '';
$config['db_name'] = 'bloglite';

// allowed content (from ?content=[VALUE])
// error is implicit
$config['content'] = ['home', 'post', 'page', 'archive'];

// autoload helper
$config['helper'] = ['debug','var_get','bl_section','bl_content','bl_data','bl_type'];

return $config;
