<?php


namespace app\index\controller;

use app\index\model\Article;
use think\Controller;

class Imglist extends  Common
{
   public function imglist()
   {
     $article = new  Article();
     $artres=$article->getallarticles(input('cateid'));
     $this->assign(array(
         'artres'=>$artres,)
     );
     
       return view('imglist');
   }
}