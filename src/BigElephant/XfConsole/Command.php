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
	 * Wrapper for $this->output->getVerbosity()
	 *
	 * @return int
	**/
	public function getVerbosity()
	{
		return $this->output->getVerbosity();
	}

	/**
	 * Write string as standard output without a new line at the end.
	 *
	 * @param  string  $string
	 * @param  int 	   $verbosity
	 * @return void
	 */
	public function write($string, $verbosity = 1)
	{
		if ($this->getVerbosity() >= $verbosity)
		{
			$this->output->write($string);
		}
	}

	/**
	 * Write a string as standard output.
	 *
	 * @param  string  $string
	 * @param  int 	   $verbosity
	 * @return void
	 */
	protected function line($string, $verbosity = 1)
	{
		if ($this->getVerbosity() >= $verbosity)
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
		if ($this->getVerbosity() >= $verbosity)
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
		if ($this->getVerbosity() >= $verbosity)
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
		if ($this->getVerbosity() >= $verbosity)
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
		if ($this->getVerbosity() >= $verbosity)
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
	public function setLaravel($container)
	{
		$this->container = $container;
		parent::setLaravel($container);
	}
}
