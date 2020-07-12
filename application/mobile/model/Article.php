<?php
  
  
  namespace app\mobile\model;
  
  
  use think\Model;
  use app\mobile\model\Cate;

  class Article extends Model
  {
    public function getallarticles($cateid){
      $cate=new Cate();
      $allcateid=$cate->getchilrenid($cateid);
      $artres=db('article')->where("cateid IN($allcateid)")->order('id desc')->paginate(2);
      return $artres;
    }
    public function gethotres($cateid){
      $cate=new Cate();
      $allcateid=$cate->getchilrenid($cateid);
      $artres=db('article')->where("cateid IN($allcateid)")->order('click desc')->limit(5)->select();
      return $artres;
    }
    
    public function getsitehot(){
      $sitehotart=$this->order('click desc')->field('id,title,thumb')->limit(5)->select();
      return $sitehotart;
    }
    
    public function getnewarticle(){
      $newarticleres=$this->db('article')->alias('a')->field('a.id,a.title,a.desc,a.thumb,a.click,a.zan,a.time,c.catename,a.cateid')->join('bk_cate c','a.cateid=c.id')->order('a.id desc')->limit(5)->select();
      return $newarticleres;
    }
    
    public function getrecart(){
      $recart=$this->where('rec','=',1)->field('id,thumb,title')->limit(4)->order('id desc')->select();
      return $recart;
    }
  }