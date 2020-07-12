<?php


namespace app\index\controller;

use app\index\model\Article;
use think\Controller;

class Search extends Common
{
  public function index()
  {
//     $article = new  Article();
//     $artres=$article->getallarticles(input('cateid'));
//     $hotres=$article->gethotres(input('cateid'));
//
//     $this->assign(array(
//       'artres'=>$artres,
//       'hotres'=>$hotres,)
//     );
     $keywords=input('keywords');
     $artres=db('article')->order('id desc')->field('id,title,time,desc,zan,click,thumb')->where('title|desc|content|keywords','like','%'.$keywords.'%')->paginate(5);
         $this->assign(array(
       'keywords'=>$keywords,
       'artres'=>$artres,
     ));
      return view('search');
  }
}