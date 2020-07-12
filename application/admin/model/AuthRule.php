<?php


namespace app\admin\model;


use think\Model;

class AuthRule extends Model
{
  
  public  function  authRuleTree(){
    $authRuleres = $this->order('sortn desc') ->select();
    return $this->sort($authRuleres);
  }
  
  public  function  sort($data,$pid=0){
    static $arr = array();
    foreach ($data as $k => $v){
      if ($v['pid']==$pid){
        $v['dataid']=$this->getparentid($v['id']);
        $arr[]=$v;
        $this->sort($data,$v['id']);
      }
      
    }
    return $arr;
  }
  
  public function getchilrenid($authRuleid){
    $authRuleres =$this->select();
    return $this->_getchilrenid($authRuleres,$authRuleid);
    
  }
  public function _getchilrenid($authRuleres,$authRuleid){
    static  $arr =array();
    foreach ($authRuleres as $k =>$v){
      if ($v['pid']== $authRuleres){
        $arr[]=$v['id'];
        $this->_getchilrenid($authRuleres,$v['id']);
      }
    }
    return $arr;
  }
  
  public function getparentid($authRuleid){
    $authRuleres =$this->select();
    return $this->_getparentid($authRuleres,$authRuleid,true);
  }
  public function _getparentid($authRuleres,$authRuleid,$clear=false){
    static  $arr =array();
    if($clear){
      $arr=array();
    }
    foreach ($authRuleres as $k =>$v){
      if ($v['id']== $authRuleid){
        $arr[]=$v['id'];
        $this->_getparentid($authRuleres,$v['pid'],false);
      }
    }
    
//    dump($arr);die;
    asort($arr);
    $arrstr=implode('-',$arr);
   
    return $arrstr;
  }
  
  
}