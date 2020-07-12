<?php


namespace app\index\controller;

use app\index\model\Article;
use think\Controller;

class Artlist extends Common
{
  public function artlist()
  {
     $article = new  Article();
     $artres=$article->getallarticles(input('cateid'));
     $hotres=$article->gethotres(input('cateid'));

     $this->assign(array(
       'artres'=>$artres,
       'hotres'=>$hotres,)
     );
     
      return view('artlist');
  }
}