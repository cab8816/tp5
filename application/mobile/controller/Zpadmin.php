<?php

namespace app\mobile\controller;
use app\index\controller\Common;
use think\Controller;
use think\Model;
use app\mobile\model\Article;

class Zpadmin extends Common
{
  public function index(){

      $articlem = new Article();
      $recartres=$articlem->getrecart();
      $ziapu = new \app\mobile\model\Zpadmin();
      $zptreeres=$ziapu->field('id,pId,name')->select();
      foreach ($zptreeres as $k=>$v){
          $v['open']=true;
      }
      $zptreeres= json_encode($zptreeres);
//          dump($zptreeres);die;

      $this->assign(array(
          'zptreeres' =>$zptreeres,
          'recartres'=>$recartres,

      )) ;






      return view("index");
  }
}