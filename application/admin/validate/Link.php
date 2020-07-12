<?php

namespace app\admin\validate;
use think\Validate;

class Link extends Validate
{
  protected  $rule = [
      'title'=>'unique:link|require|max:25',
      'url'=>'unique:link|require|max:60',
      'descr'=>'require|max:80',
    ];
  protected  $message= [
    'title.require' =>'链接标题不能为空',  
    'title.max' =>'链接标题长度不能大于25',  
    'title.unique' =>'链接标题不能重复', 
    'url.require' =>'链接地址不能为空',  
    'url.max' =>'链接地址长度不能大于60',  
    'url.unique' =>'链接地址不能重复',  
    'descr.require' =>'链接描述不能为空',  
    'descr.max' =>'链接描述长度不能大于80',  
  ];
  
  protected $scene=[
    'add' => ['title'=>'require|unique:link','url','descr'],
    'edit' => ['title'=>'require|unique:link','url','descr'],
  ];

}