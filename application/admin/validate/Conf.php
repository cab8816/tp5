<?php

namespace app\admin\validate;
use think\Validate;

class Conf extends Validate
{
  protected  $rule = [
      'cnname'=>'require|max:50',
      'enname'=>'require|max:50',
      'type'=>'require',
      'value'=>'require',
      'sort'=>'require',
      
    ];
  protected  $message= [
    'cnname.require' =>'配置中文名称不能为空',  
    'cnname.max' =>'配置中文名称长度不能大于50',  
    'enname.require' =>'配置英文名称不能为空',  
    'enname.max' =>'配置英文名称长度不能大于50',  
    'type.require' =>'配置类型不能为空',  
    'value.require' =>'配置值不能为空',  
    'sort.require' =>'配置排序不能为空',  
  ];
  
  protected $scene=[
    'add' => ['cnname','enname',],
    'edit' => ['cnname','enname',],
  ];

}