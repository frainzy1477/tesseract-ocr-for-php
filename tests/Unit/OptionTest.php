<?php namespace thiagoalessio\TesseractOCR\Tests\Unit;

use thiagoalessio\TesseractOCR\Tests\Common\TestCase;
use thiagoalessio\TesseractOCR\Option;

class OptionTest extends TestCase
{
	public function testPsm()
	{
		$psm = Option::psm(8);
		$this->assertEquals('-psm 8', $psm());
	}
}
