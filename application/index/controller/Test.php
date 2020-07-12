<?php
  
  
  namespace app\index\controller;
  
  
  use think\Controller;

  class Test extends Controller
  {
    public function test($name){

//        $this->assign("name",$name);


      return $name;
    }
  }