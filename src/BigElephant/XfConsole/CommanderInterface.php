<?php namespace BigElephant\Console;

use BigElephant\Console\Application as ConsoleApp;

interface CommanderInterface {

	public function build(ConsoleApp $consoleApp);
}