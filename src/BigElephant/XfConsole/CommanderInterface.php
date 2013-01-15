<?php namespace BigElephant\XfConsole;

use BigElephant\XfConsole\Application as ConsoleApp;

interface CommanderInterface {

	public function build(ConsoleApp $consoleApp);
}