<?php


namespace app\admin\validate;


use think\Validate;

class Regist extends Validate
{
    protected  $rule = [
        'name'=>'unique:user|require|max:30',
        'password1'=>'require|max:25',
        'password2'=>'require|max:25',
        'realname'=>'require',
        'mobiphone'=>'require|regex:1[3-8]{1}[0-9]{9}',

    ];
    protected  $message= [
        'name.require' =>'用户名称不能为空',
        'name.max' =>'用户名称长度不能大于30',
        'name.unique' =>'用户名称不能重复',
        'password1.require' =>'密码不能为空',
        'realname.require' =>'真实姓名不能为空',
        'password1.max' =>'密码长度不能大于25',
        'password2.require' =>'密码不能为空',
        'password2.max' =>'密码长度不能大于25',
        'mobiphone.regex' =>'请输入正确的手机号',
        'mobiphone.require' =>'手机号不能为空',

    ];

    protected $scene=[
        'input' => ['name','password1','password2','realname','mobiphone'],
    ];
}