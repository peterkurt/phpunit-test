<?php

/**
 *
 *
 * @author     Jakub Chabek | http://www.chabek.cz
 * @copyright  Copyright (c) 2012 Jakub Chabek
 * @package
 */
class HomepagePresenter extends BasePresenter
{

	function renderDefault()
	{
		dump($this->getCount(1, 2, 3, 5));
		$this->getCount();
	}

}
