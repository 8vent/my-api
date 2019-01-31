<?php

namespace App;

spl_autoload_register(function($class) {
		if (stripos($class, __NAMESPACE__) === 0)
		{
			$includepath = __DIR__ . DIRECTORY_SEPARATOR . 'src' . str_replace('\\', DIRECTORY_SEPARATOR, (substr($class, strlen(__NAMESPACE__)))) . '.php';
			//echo $includepath;
			require_once($includepath);
		}
	}
);
