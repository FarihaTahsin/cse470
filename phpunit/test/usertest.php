<?php

class usertest extends \PHPunit\Framework\TestCase 
{
	public $user ;
	
	public function setup():void{
		$this->user=new\App\user;

	}

	public function testgetname()
	{
		$this->name->setname(‘fariha’);
		$this->asserEquals($this->user->getname(),‘fariha’);
	}

	public function testgetpassword(){
		$this->admin->setpassword(‘uni’);
        $this->asserEquals($this->user->getpassword(),‘uni’);
	}
}
