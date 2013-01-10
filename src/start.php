<?php

use BigElephant\XfConsole\Application;

$application = new Application('XenForo Developer', '0.1');

try 
{
	$application->detectXenForo();

	require_once $application->getXfLibPath().'/XenForo/Autoloader.php';
	XenForo_Autoloader::getInstance()->setupAutoloader($application->getXfLibPath());

	XenForo_Application::setDebugMode(true);
	XenForo_Application::initialize($application->getXfLibPath(), $application->getXfLibPath().'/../');

	$dependencies = new XenForo_Dependencies_Public();
	$dependencies->preLoadData();
}
catch (Exception $e)
{
	$application->renderException($e, new Symfony\Component\Console\Output\ConsoleOutput);
	exit;
}

return $application;