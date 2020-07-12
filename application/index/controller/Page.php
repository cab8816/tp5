<?php


namespace app\index\controller;


use think\Controller;

class Page  extends Common
{
   public function page()
   {
       $cates=db('cate')->find(input('cateid'));
       $this->assign('cates',$cates);
       return view('page');
   }
}