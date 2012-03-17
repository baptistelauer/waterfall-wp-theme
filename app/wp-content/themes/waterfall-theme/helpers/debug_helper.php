<?php

if (!function_exists('printr'))
{
    function printr($var)
    {
	echo '<pre>';
	print_r($var);
	echo '</pre>';
    }
}
