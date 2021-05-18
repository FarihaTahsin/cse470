<?php

class admintest extends \PHPunit\Framework\TestCase 
{
	protected $admin ;
	
	

	public function testgetname()
	{   
		$this->admin=new\App\admin ;
		$this->admin->setname(‘fariha’);
		$this->asserEquals($this->admin->getname(),‘fariha’);
	}

	public function testgetpassword(){
		$this->admin=new\App\user;
		$this->admin->setpassword(‘uni’);
        $this->asserEquals($this->admin->getpassword(),‘uni’);
	}
}
