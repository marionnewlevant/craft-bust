<?php
namespace Craft;

class BustVariable
{
	public function er($file)
	{
		if (file_exists($_SERVER['DOCUMENT_ROOT'] . $file))
		{
			$time = filemtime($_SERVER['DOCUMENT_ROOT'] . $file);
			return $file . '?' . $time;
		}
		else
		{
			return $file;
		}
	}
}
