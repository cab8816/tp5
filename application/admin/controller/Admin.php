<?php

namespace app\admin\controller;

use \app\admin\model\Admin as Adminmodel;

class Admin extends Common
{
    public function lst()
    {
       $auth = new Auth();
      
        $admin = new Adminmodel();

        $adminres = $admin->getadmin();
      foreach ($adminres as  $k => $v) {
        $_grouptitle=$auth->getGroups($v['id']);
  
          $grouptitle= $_grouptitle[0]['title'];
          $v['grouptitle']=$grouptitle;
 
   
        }
        $this->assign('adminres', $adminres);
        return view();
    }

    public function edit($id)
    {
        $admin = new Adminmodel();
        $admins = db('admin')->field('id,name,password')->find($id);
        if (request()->isPost()) {
            $data = input('post.');
            $validate = \think\Loader::validate('admin');
            if (!$validate->scene('edit')->check($data)) {
                $this->error($validate ->getError());
            }
            $res = $admin->editadmin($data, $admins);

            if ($res == 2) {
                $this->error('管理员名称不得为空');

            }
            if ($res !== false) {
                $this->success('修改成功', url('lst'));
            } else {
                $this->error('修改失败');
            }
            return;
        }

        if (!$admins) {
            $this->error('该管理员不存在', 'lst', '', 1);

        }
      $authgroupaccess =db('auth_group_access')->where(array('uid'=>$id))->find();
//        dump($authgroupaccess);die;
      $authgroupres =db("auth_group")->select();
        $this->assign(array(
          'admin'=> $admins,
          'authgroupres'=> $authgroupres,
            'groupid'=>$authgroupaccess['group_id'],
        )
         );

        return view();
    }


    public function add()
    {
        if ($this->request->isPost()) {
            $data = input('post.');
          
            $validate = \think\Loader::validate('admin');
            if (!$validate->scene('add')->check($data)) {
                $this->error($validate ->getError());
            }
         
            $admin = new Adminmodel();
            $res = $admin->addadmin($data);

            if ($res) {
                $this->success('添加管理员成功!', url('lst'));
            } else {
                $this->error('添加管理员失败!');
            }
            return;
        }
        $authgroupres =db("auth_group")->select();
        $this->assign('authgroupres', $authgroupres);
        return view();
    }

    public function del($id)
    {

        $admin = new Adminmodel();
        $res = $admin->deladmin($id);
        if ($res == 1) {
            $this->success('删除管理员成功!', url('lst'));
        } else {
            $this->error('删除管理员失败!', url('lst'));
        }


    }

    public function logout()
    {
        session(null);
        $this->success('退出系统成功!', url('login/index'));
    }


}