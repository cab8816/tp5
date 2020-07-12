<?php
  
  namespace app\index\controller;
  
  use app\index\model\Article;
  use think\Controller;

//use think\Db;
  use think\Url;
  
  class Index extends Common
  {
    public function index()
    {
      $articlem = new Article();
      $newarticleres = $articlem->getnewarticle();
      $sitehotres=$articlem->getsitehot();
      $recartres=$articlem->getrecart();
      //友情链接
      $linkres=db('link')->order('sortn desc')->select();
      $this->assign(array(
        'newarticleres'=>$newarticleres,
        'sitehotres'=>$sitehotres,
        'linkres'=>$linkres,
        'recartres'=>$recartres,
      ));
      return view('index');
    }
    
    
  }
