<?php


namespace app\index\controller;


use app\index\model\User;
use think\Controller;

class Regist extends Controller
{
    public function index()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $validate = \think\Loader::validate('Regist');
            if (!$validate->scene('input')->check($data)) {
                $this->error($validate->getError());
            }
//            dump($data);die;
            $admin = new User();
            if ($data['password1'] == $data['password2']) {
                $data['password'] = md5($data['password1']);
                $res=$admin->allowField(true)->save($data);
                if ($res){
                    $this->success('注册成功,跳转登陆', 'public/admin/Login/index', '', 1);
                }else{
                    $this->error('失败', '', '', 1);

                }


            }


            return;
        }
        return view('regist');
    }
}