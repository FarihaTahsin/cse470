<?php

class menutest extends \PHPunit\Framework\TestCase 
{
	public $menu ;
	
	public function setup():void{
		$this->menu=new\App\admin;

	}

	public function testgetname()
	{
		$this->name->setname(‘beefpatty’);
		$this->asserEquals($this->menu->getname(),‘beefpatty’);
	}

	public function testgetprice(){
		$this->menu->setpassword(‘20’);
        $this->asserEquals($this->menu->getpassword(),‘20’);
	}
}
