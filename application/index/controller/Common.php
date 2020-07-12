<?php
  
  
  namespace app\index\controller;
  
  
  use think\Controller;

  class Common extends Controller
  {
    public function _initialize()
    {
      //当前位置
      if (input('cateid')){
        $this->getpos(input('cateid'));
      }
      if (input('artid')){
        $articles=db('article')->field('cateid')->find(input('artid'));
        $catid=$articles['cateid'];
        echo $catid;
        $this->getpos($catid);
      }
      //当前网站配置
     $this->getconf();
     //网站栏目导航
      $this->getNavCate();
    }
    
    public function getNavCate(){
      $cateres=db('cate')->where(array('pid'=>0))->select();
      foreach ($cateres  as $k => $v) {
        $children=db('cate')->where(array('pid'=>$v['id']))->select();
        if ($children){
          $cateres[$k]['children']=$children;
        } else{
          $cateres[$k]['children']=0;
        }
     }
      $this->assign('cateres',$cateres);
    }
    
    public function getconf(){
      $conf = new \app\index\model\Conf();
      $_confres = $conf->getallconf();
      foreach ($_confres as $k => $v) {
        $confres[$v['enname']] = $v['cnname'];
      }
      $this->assign('confres', $confres);
    }
  public function getpos($cateid){
    $cate=new \app\index\model\Cate();
    $posArr =$cate->getparents($cateid);
    $this->assign('posArr', $posArr);
  }
    
  }