<?php


namespace app\admin\controller;

use app\admin\model\Admin;
use think\Controller;
use think\captcha\Captcha;

class Login    extends  Controller
{
    public function index()
    {
        if (request()->isPost()){
          $this->check_verify(input('code'));
            $admin =new Admin();
            $num=$admin->login(input('post.'));
            if ($num == 1){
              $this -> error('用户不存在') ;
            }
            if ($num == 2){
              $this -> success('登录成功',url('index/index'),null,1) ;
            }
            if ($num == 3){
              $this -> error('密码错误',url(''),null,1) ;
            }

            return;
        }

        return view();
    }
  // 检测输入的验证码是否正确，$code为用户输入的验证码字符串，$id多个验证码标识
  public  function check_verify($code){
    $captcha = new Captcha();
    if (!$captcha->check($code)){
      $this->error('验证码错误');
    }else{
      return true;
    }
   
  }
}