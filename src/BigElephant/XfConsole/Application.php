<?php namespace BigElephant\XfConsole;

class Application extends \Symfony\Component\Console\Application {

	protected $xfLib;

	/**
	 * Start a new Console application.
	 *
	 * @return BigElephant\XF-Console\Application
	 */
	public static function start()
	{
		return require __DIR__.'/../../start.php';
	}

	public function detectXenForo()
	{
		$dir = getcwd();

		// Find the library directory
		// TODO: crawl all directories incase it isn't named library
		$posibilities = array(
			'/config.php' => '/',
			'/library/config.php' => '/library/',
			'/../library/config.php' => '/../',
		);

		foreach ($posibilities AS $try => $path)
		{
			if (file_exists($dir.$try))
			{
				$this->xfLib = $dir.$path;
				break;
			}
		}

		if (is_null($this->xfLib))
		{
			throw new \Exception('Couldn\'t locate XenForo install.');
		}
	}

	public function getXfLibPath()
	{
		return $this->xfLib;
	}
}