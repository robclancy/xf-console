<?php namespace BigElephant\Console;

use BigElephant\Console\Application;

interface CommanderInterface {

	public function build(Application $consoleApp);
}