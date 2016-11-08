<?php

function getImages($dir) 
{

	$images = array();
	$iterator = new RecursiveDirectoryIterator($dir);
	$extensions = array('jpeg','jpg','png','gif');

	foreach(new RecursiveIteratorIterator($iterator) as $file)
	{
	    if (in_array(strtolower(array_pop(explode('.', $file))), $extensions))
	    	$images[] = $file;
	}

	return $images;
}

echo "<pre>";
print_r(getImages("/var/www/html/task"));