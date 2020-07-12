<?php
  
  
  namespace app\index\model;
  
  
  use think\Model;

  class Commonmodel extends Model
  {
    //====================树桩信息管理===============begin
 
  
    public function getchilrenid($cateid){
      $cateres =$this->select();
      return $this->_getchilrenid($cateres,$cateid);
    
    }
    public function _getchilrenid($cateres,$cateid){
      static  $arr =array();
      foreach ($cateres as $k =>$v){
        if ($v['pid']== $cateid){
          $arr[]=$v['id'];
          $this->_getchilrenid($cateres,$v['id']);
        }
      }
      return $arr;
    }
    
    
      public function getparents($zpid)
      {
          $zpres = $this->field('id,pid,catename')->select();
          $zps = db('cate')->field('id,pid,catename')->find($zpid);
          $pid = $zps['pid'];
          if ($pid) {
              $arr = $this->_getparentsid($zpres, $pid);
          }
          $arr[] = $zps;
          return $arr;
      }
    
      public function _getparentsid($zpres, $pid)
      {
          static $arr = array();
          foreach ($zpres as $k => $v) {
              if ($v['id'] == $pid) {
                  $arr[] = $v;
                  $this->_getparentsid($zpres, $v['pid']);
              }
          }
          return $arr;
      }
    
    //====================树桩信息管理===============end
  
  }