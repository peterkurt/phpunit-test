<?php

/**
 * @author     Jakub Chabek | http://www.chabek.cz
 * @copyright  Copyright (c) 2012 Jakub Chabek
 * @package
 */
abstract class UnitTestCase extends PHPUnit_Framework_TestCase
{

	function getContext()
	{
		global $container;

		return $container;
	}

}

