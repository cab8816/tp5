<?php


namespace app\admin\validate;


use think\Validate;

class Cate extends Validate
{
    protected  $rule = [
        'catename'=>'unique:cate|require|max:25',

    ];
    protected  $message= [
        'catename.require' =>'链接标题不能为空',
        'catename.max' =>'链接标题长度不能大于25',
        'catename.unique' =>'链接标题不能重复',

    ];

    protected $scene=[
        'add' => ['catename'],
        'edit' => ['catename'],
    ];
    
}