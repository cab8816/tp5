<?php
  
  
  namespace app\index\controller;
  
  
  class Article extends Common
  {
    public function article()
    {
      $artid = input('artid');
      // score 字段加 1
      db('article')->where('id', $artid)->setInc('click');
      $articles=db('article')->find($artid);
      $article=new \app\index\model\Article();
      $hotres=$article->gethotres($articles['cateid']);
      
      $this->assign(array(
        'articles'=>$articles,
        'hotres'=>$hotres,
        ));
      return view('article');
    }
    public function zan ($ip,$artid){
      $data=['ip'=>$ip,'artid'=>$artid];
      $add=db('zan')->insert($data);
      if ($add) {
        echo 1;
      } else{
        echo 2;
      }
      
    }
  }