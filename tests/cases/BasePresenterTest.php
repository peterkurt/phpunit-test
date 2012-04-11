<?php

/**
 * @author     Jakub Chabek | http://www.chabek.cz
 * @copyright  Copyright (c) 2012 Jakub Chabek
 * @package
 */
class BasePresenterTest extends UnitTestCase
{

	/** @var BasePresenter */
	private $object;

	function setUp()
	{
		$this->object = $this->getMock('BasePresenter', null, array($this->getContext()));;
	}

	function testCountWithCorrectValues()
	{
		$this->assertEquals(0, $this->object->getCount());
		$this->assertEquals(2, $this->object->getCount(2));
		$this->assertEquals(3, $this->object->getCount(1, 2));
		$this->assertEquals(5, $this->object->getCount(-5, 12, -3, 1));
		$this->assertEquals(1, $this->object->getCount(-1.5, 2.5, -0.5, "0.5"));
	}

	function testCountWithIncorrectValues()
	{
		$data = array(
			array(2, 'test'),
			array(2, array()),
			array(2, new stdClass),
		);

		foreach ($data as $key => $args)
		{
			try {
				call_user_func_array(array($this->object, 'getCount'), $args);
				$this->fail('Exception not thrown, key: ' . $key);
			} catch (\Nette\InvalidArgumentException $e) { }
		}
	}

}

