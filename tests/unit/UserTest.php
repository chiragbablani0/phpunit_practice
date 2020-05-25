<?php

class UserTest extends \PHPUnit\Framework\TestCase
{
	public function testThatWeCanGetTheFirstName()
	{
		$user = new \App\Models\User;

		$user->setFirstName('vuldo');

		$this->assertEquals($user->getFirstName(),'vuldo');
	}
	public function testThatWeCanGetTheLastName()
	{
		$user = new \App\Models\User;

		$user->setLastName('yolo');
		
		$this->assertEquals($user->getLastName(),'yolo');
	}
	public function testFullNameisReturned()
	{
		$user = new \App\Models\User;
		$user->setFirstName('vuldo');
		$user->setLastName('yolo');

		$this->assertEquals($user->getFullName(),'vuldo yolo');
	}

	public function testFirstAndLastNameAreTrained()
	{
		$user = new \App\Models\User;
		$user->setFirstName('vuldo    ');
		$user->setLastName('     yolo');

		$this->assertEquals($user->getFirstName(),'vuldo');
		$this->assertEquals($user->getLastName(),'yolo');
	}
	public function testEmailAddressCanBeSet()
	{
		$user = new \App\Models\User;
		$user->setEmail('vuldo@gmail.com');
		$this->assertEquals($user->getEmail(),'vuldo@gmail.com');

	}

	public function testEmailVariablesContainCorrectValues()
	{
		$user = new \App\Models\User;
		$user->setFirstName('vuldo');
		$user->setLastName('yolo');
		$user->setEmail('vuldo@gmail.com');

		$emailVariables = $user->getEmailVariables();

		$this->assertArrayHasKey('full_name',$emailVariables);
		$this->assertArrayHasKey('email',$emailVariables);

		$this->assertEquals($emailVariables['full_name'],'vuldo yolo');

		$this->assertEquals($emailVariables['email'],'vuldo@gmail.com');

	}
}