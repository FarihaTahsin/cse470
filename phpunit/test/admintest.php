<?php

class admintest extends \PHPunit\Framework\TestCase 
{
	public $admin ;
	
	public function setup():void{
		$this->admin=new\App\admin;

	}

	public function testgetname()
	{
		$this->name->setname(‘fariha’);
		$this->asserEquals($this->admin->getname(),‘fariha’);
	}

	public function testgetpassword(){
		$this->admin->setpassword(‘uni’);
        $this->asserEquals($this->admin->getpassword(),‘uni’);
	}
}
