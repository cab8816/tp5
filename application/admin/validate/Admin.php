<?php


namespace app\admin\validate;


use think\Validate;

class Admin extends Validate
{
    protected  $rule = [
        'name'=>'unique:admin|require|max:25',
        'password'=>'require|max:25',

    ];
    protected  $message= [
        'name.require' =>'管理员名称不能为空',
        'name.max' =>'管理员名称长度不能大于25',
        'name.unique' =>'管理员名称不能重复',
 'password.require' =>'密码不能为空',
        'password.max' =>'密码长度不能大于25',
        'password.unique' =>'密码不能重复',

    ];

    protected $scene=[
        'add' => ['name','password'],
        'edit' => ['name','password'=>'min:6'],
    ];
}