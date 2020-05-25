<?php

#We include that file in our test script and include the already installed PHPUnit/Framework.php 
class SampleTest extends \PHPUnit\Framework\TestCase
{
	public function testTrueAssertstoTrue()
	{
		$this->assertTrue(true);
		#this function returns true and checks whether the arguement passed matches with it
	}
}