<?php

namespace App 

class menu{
 public $name;
 public $price;

 public function setname($name){
 	$this->name=$name;

 }

 public function getname(){
 	return $this->name;
 }
 public function setprice($price){
 	$this->price=$price;
 }
 public function getprice(){
 	return $this->price;

  }


}
   
  