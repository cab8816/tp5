<?php


namespace app\admin\validate;


use think\Validate;

class Article extends Validate
{
  protected $rule = [
      'title'=>'unique:link|require|max:25',
      'cateid'=>'require',
      'content'=>'require',
  ];

    protected  $message= [
        'title.require' =>'文章标题不能为空',
        'title.max' =>'文章标题长度不能大于25',
        'title.unique' =>'文章标题不能重复',
        'cateid.require' =>'所属栏目不能为空',
        'content.require' =>'文章内容不能为空',
    ];

    protected $scene=[
        'add' => ['title','cateid','content'],
        'edit' => ['title','cateid','content'],
    ];
}