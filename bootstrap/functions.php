<?php

if (!function_exists('active')) {
	function active($uri, $class = 'active') {
		return Request::is($uri) ? ' class="' . $class . '"' : '';
	}
}