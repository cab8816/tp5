<?php
  
  
  namespace app\admin\controller;
  
  use app\admin\model\AuthGroup as AuthGroupModel;
  use think\Loader;
  use think\View;
  
  
  class AuthGroup extends Common
  {
    
    
    public function lst()
    {
      $authgroup = new AuthGroupModel();
//        if (request()->isPost()){
//            $sorts=input('post.');
//            foreach ($sorts as $k => $v){
//               $link->update(['id'=>$k,'sortn'=>$v]);
//            }
//            $this->success('更新排序成功',url('lst'));
//            return;
//        }
      $authgroupres = $authgroup->paginate(3);
      $this->assign('authgroupres', $authgroupres);
      return view();
    }
    
    public function add()
    {
      if (request()->isPost()) {
        $data = input('post.');
        if ($data['rules']){
          $data['rules']=implode(',',$data['rules']);
        }
        $validate = \think\Loader::validate('AuthGroup');
        if (!$validate->scene('add')->check($data)) {
          $this->error($validate->getError());
        }
        $add = AuthGroupModel::create($data);
        if ($add !== false) {
          $this->success('添加用户组成功', url('lst'));
        } else {
          $this->error('添加用户组失败');
        }
        return;
      }
      
      $authRule = new \app\admin\model\AuthRule();
      $authRuleres = $authRule->authRuleTree();
      $this->assign('authRuleres', $authRuleres);
      return view();
    }
    
    public function del()
    {
      if (AuthGroupModel::destroy(input('id'))) {
        $this->success('删除用户组成功', url('lst'));
      } else {
        $this->error('删除用户组失败');
      }
    }
    
    
    public function edit()
    {
      $authgroup = new  AuthGroupModel();
      if (request()->isPost()) {
        $data = input('post.');
        if ($data['rules']){
          $data['rules']=implode(',',$data['rules']);
        }
        if (!isset($data['status'])) {
          $data['status'] = 0;
        }
        $validate = \think\Loader::validate('AuthGroup');
        if (!$validate->scene('edit')->check($data)) {
          $this->error($validate->getError());
        }
        
        $save = $authgroup->update($data);
        if ($save !== false) {
          $this->success('修改用户组成功', url('lst'));
        } else {
          $this->error('修改用户组失败');
        }
        return;
      }
      $auth_groups = db('auth_group')->find(input('id'));
      $authRule = new \app\admin\model\AuthRule();
      $authRuleres = $authRule->authRuleTree();
      $this->assign(array(
        'auth_groups' => $auth_groups,
        'authRuleres' => $authRuleres,
      ));
      return view();
    }
    
    
  }