<?php

namespace app\admin\validate;
use think\Validate;

class AuthGroup extends Validate
{
  protected  $rule = [
      'title'=>'require|max:25',
      'rules'=>'require|max:80',
    ];
  protected  $message= [
    'title.require' =>'用户组名称不能为空',
    'title.max' =>'用户组名称长度不能大于25',
    'rules.require' =>'规则描述不能为空',
    'rules.max' =>'规则描述长度不能大于80',
  ];
  
  protected $scene=[
    'add' => ['title'=>'require','status'],
    'edit' => ['title'=>'require','status'],
  ];

}