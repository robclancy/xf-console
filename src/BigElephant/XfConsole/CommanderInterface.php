<?php namespace BigElephant\XfConsole;

use BigElephant\Console\Application as ConsoleApp;

interface CommanderInterface {

	public function build(ConsoleApp $consoleApp);
}