<?php
  
  
  namespace app\admin\controller;
  
  use app\admin\model\AuthRule as AuthRuleModel;
  use think\Loader;
  use think\View;
  
  
  class AuthRule extends Common
  {
    protected $beforeActionList = [
      'delsoncate' => ['only' => 'del'],
    ];
    
    public function lst()
    {
      $authrule = new AuthRuleModel();
      if (request()->isPost()) {
        $sorts = input('post.');
        foreach ($sorts as $k => $v) {
          $authrule->update(['id' => $k, 'sortn' => $v]);
        }
        $this->success('更新排序成功', url('lst'));
        return;
      }
      $authruleres = $authrule->authRuleTree();
      $this->assign('authruleres', $authruleres);
      return view();
    }
    
    public function add()
    {
      
      if (request()->isPost()) {
        $data = input('post.');
        $plevel = db('auth_rule')->where('id', $data['pid'])->field('level')->find();
        if ($plevel) {
          $data['level'] = $plevel['level'] + 1;
        } else{
          $data['level'] = 0;
        }
        $validate = \think\Loader::validate('AuthRule');
        if (!$validate->scene('add')->check($data)) {
          $this->error($validate->getError());
        }
        $add = AuthRuleModel::create($data);
        if ($add !== false) {
          $this->success('添加权限成功', url('lst'));
        } else {
          $this->error('添加权限失败');
        }
        return;
      }
      $authrule = new AuthRuleModel();
      $authruleres = $authrule->authRuleTree();
      $this->assign('authruleres', $authruleres);
      return view();
    }
    
    public function del()
    {
      $authrule = new AuthRuleModel();
      $authrule->getparentid(input('id'));
     
      if (AuthRuleModel::destroy(input('id'))) {
        $this->success('删除权限成功', url('lst'));
      } else {
        $this->error('删除权限失败)', url('lst'));
      }
    }
    
    
    public function edit()
    {
      $authrule = new AuthRuleModel();
      if (request()->isPost()) {
        $data = input('post.');
        $plevel = db('auth_rule')->where('id', $data['pid'])->field('level')->find();
        if ($plevel) {
          $data['level'] = $plevel['level'] + 1;
        } else{
          $data['level'] = 0;
        }
        $validate = \think\Loader::validate('AuthRule');
        if (!$validate->scene('edit')->check($data)) {
          $this->error($validate->getError());
        }
        
        $save = $authrule->update($data);
        if ($save !== false) {
          $this->success('修改权限成功', url('lst'));
        } else {
          $this->error('修改权限失败');
        }
        return;
      }
      $authrule = new AuthRuleModel();
      $authruleres = $authrule->find(input('id'));
      $authrules = $authrule->authRuleTree();
      $this->assign(array(
          'authruleres' => $authruleres,
          'authrules' => $authrules,)
      
      );
      return view();
    }
  
  
  
    public function delsoncate()
    {
      $authRuleid = input('id');//要删除的当前栏目的id
      $authRule = new  AuthRuleModel();
      $sonids = $authRule->getchilrenid($authRuleid);
      $allcateid = $sonids;
      $allauthRuleid[] = $authRuleid;
     
      foreach ($allcateid as $k => $v) {
        $authRule->where(array('id' => $v))->delete();
      }
      if ($sonids) {
      }
      db('auth_rule')->delete($sonids);
    
    }
    
  }