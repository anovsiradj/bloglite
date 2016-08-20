<?php // 201606281940
function var_get($k, $v = null)
{
	if (isset($_GET[$k])) {
		if (empty($v)) return $_GET[$k];
		else {
			if ($_GET[$k] === $v) return true;
			return false;
		}
	} else {
		if (empty($v)) return null;
		return false;
	}
}