<?php namespace BigElephant\XfConsole;

use Illuminate\Console\Application as App;
use Illuminate\Container\Container;

class Application extends App {

	protected $xfLib;

	protected $container;

	public function __construct(Container $container)
	{
		parent::_construct('XenForo Developer', '0.1');

		$this->setContainer($container);
	}

	/**
	 * Start a new Console application.
	 *
	 * @return BigElephant\XF-Console\Application
	 */
	public static function start($app)
	{
		return require __DIR__.'/../../start.php';
	}

	public function runCommanders($commanders)
	{
		$commanders = is_array($commanders) ? $commanders : func_get_args();

		foreach ($commanders AS $commander)
		{
			$commander->build($this);
		}
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

	public function setContainer(Container $container)
	{
		$this->container = $container;
		$this->setLaravel($container);
	}
}