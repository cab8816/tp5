<?php

namespace app\admin\validate;
use think\Validate;

class AuthRule extends Validate
{
  protected  $rule = [
      'title'=>'require|max:25',
    ];
  protected  $message= [
    'title.require' =>'权限名称不能为空',
    'title.max' =>'权限名称长度不能大于25',
  ];
  
  protected $scene=[
    'add' => ['title'=>'require'],
    'edit' => ['title'=>'require'],
  ];

}