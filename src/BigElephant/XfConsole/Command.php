<?php namespace BigElephant\XfConsole;

use Illuminate\Console\Command as BaseCommand;
use Illuminate\Container\Container;

class Command extends BaseCommand {

	/**
	 * The the container instance.
	 *
	 * @var Illuminate\Container\Container
	 */
	protected $container;

	/**
	 * Write a string as standard output.
	 *
	 * @param  string  $string
	 * @param  int 	   $verbosity
	 * @return void
	 */
	protected function line($string, $verbosity = 1)
	{
		if ($this->getVerbosity() >= $verbosiry)
		{
			parent::line($string);
		}
	}

	/**
	 * Write a string as information output.
	 *
	 * @param  string  $string
	 * @param  int 	   $verbosity
	 * @return void
	 */
	protected function info($string, $verbosity = 1)
	{
		if ($this->getVerbosity() >= $verbosiry)
		{
			parent::info($string);
		}
	}

	/**
	 * Write a string as comment output.
	 *
	 * @param  string  $string
	 * @param  int 	   $verbosity
	 * @return void
	 */
	protected function comment($string, $verbosity = 1)
	{
		if ($this->getVerbosity() >= $verbosiry)
		{
			parent::comment($string);
		}
	}

	/**
	 * Write a string as question output.
	 *
	 * @param  string  $string
	 * @param  int 	   $verbosity
	 * @return void
	 */
	protected function question($string, $verbosity = 1)
	{
		if ($this->getVerbosity() >= $verbosiry)
		{
			parent::question($string);
		}
	}

	/**
	 * Write a string as error output.
	 *
	 * @param  string  $string
	 * @param  int 	   $verbosity
	 * @return void
	 */
	protected function error($string, $verbosity = 1)
	{
		if ($this->getVerbosity() >= $verbosiry)
		{
			parent::error($string);
		}
	}

	/**
	 * We don't use laravel but some components, this will be called by our App
	 * and we want to use $this->container instead of $this->laravel as to not
	 * confuse people
	 *
	 * @param  Illuminate\Container\Container $container
	 * @return void
	 */
	public function setLaravel(Container $container)
	{
		$this->container = $container;
		parent::setLaravel($container);
	}
}
