<?php namespace BigElephant\XfConsole;

class Application extends \Symfony\Component\Console\Application {

	/**
	 * Start a new Console application.
	 * Done here like this incase of more logic in future.
	 *
	 * @return BigElephant\XF-Console\Application
	 */
	public static function start()
	{
		return require __DIR__.'/../../start.php';
	}
}