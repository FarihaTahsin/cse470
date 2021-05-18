<?php

namespace App 

class admin{
 public $name;
 public $password;

 public function setname($name){
 	$this->name=$name;

 }

 public function getname(){
 	return $this->name;
 }
 public function setpassword($password){
 	$this->password=$password;
 }
 public function getpassword(){
 	return $this->password ;

  }


}
   
  