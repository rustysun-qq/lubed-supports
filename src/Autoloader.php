<?php
namespace Lubed\Supports;

use Exception;

final class Autoloader
{
	public static function autoload(string $class_name)
    {
        
    }

    public static function register(string $class = 'Runtime', bool $enabled = true)
    {
        if (!function_exists('spl_autoload_register')) {
            throw new Exception('spl_autoload does not exist in this PHP installation');
        }
        if ($enabled !== true) {
            spl_autoload_unregister([$class, 'autoload']);
            return;
        }
        spl_autoload_register([$class, 'autoload']);
    }
}