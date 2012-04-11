<?php

/**
 *
 *
 * @author     Jakub Chabek | http://www.chabek.cz
 * @copyright  Copyright (c) 2012 Jakub Chabek
 * @package
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

	/**
	 * @param int
	 * @return int
	 * @throws Exception
	 */
	function getCount()
	{
		$count = 0;
		foreach (func_get_args() as $arg)
		{
			if (!is_numeric($arg))
				throw new \Nette\InvalidArgumentException('Only numbers are allowed as arguments');

			$count += $arg;
		}

		return $count;
	}

}
