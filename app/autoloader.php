<?php
/**
 * 
 */
class Autoloader
{
	
	static function autoload($className)
	{
		require('app/'.$className.'.php');
	}

   static function register()
   {
   	 spl_autoload_register([__CLASS__, 'autoload']);
   }
}