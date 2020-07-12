<?php
  
  
  namespace app\admin\controller;
  
  use app\admin\model\Conf as ConfModel;
  
  
  class Conf extends Common
  {
    
    public function lst()
    {
      
      $conf = new ConfModel();
      if (request()->isPost()) {
        $sorts = input('post.');
        
        foreach ($sorts as $k => $v) {
          $conf->update(['id' => $k, 'sort' => $v]);
        }
        $this->success('更新排序成功', url('lst'));
        return;
      }
      
      
      $confres = $conf->order('sort desc')->paginate(10);
      $this->assign('confres', $confres);
      return view();
    }
    
    public function add()
    {
      if (request()->isPost()) {
        $data = input('post.');
        $validate = \think\Loader::validate('Conf');
        if (!$validate->scene('add')->check($data)) {
          $this->error($validate->getError());
        }
        if ($data['values']) {
          $data['values'] = str_replace('，', ',', $data['values']);
        }
        $add = ConfModel::create($data);
        if ($add !== false) {
          $this->success('添加配置成功', url('lst'));
        } else {
          $this->error('添加配置失败');
        }
        return;
      }
      return view();
    }
    
    public function del()
    {
      if (ConfModel::destroy(input('id'))) {
        $this->success('删除配置成功', url('lst'));
      } else {
        $this->error('删除配置失败');
      }
    }
    
    
    public function edit()
    {
      $conf = new  ConfModel();
      if (request()->isPost()) {
        $data = input('post.');
        $validate = \think\Loader::validate('Conf');
        if (!$validate->scene('edit')->check($data)) {
          $this->error($validate->getError());
        }
        if ($data['values']) {
          $data['values'] = str_replace('，', ',', $data['values']);
        }
        $save = $conf->update($data);
        if ($save !== false) {
          $this->success('修改配置成功', url('lst'));
        } else {
          $this->error('修改配置失败');
        }
        return;
      }
      $confs = db('conf')->find(input('id'));
      $this->assign('confs', $confs);
      return view();
    }
    
    public function conf()
    {
      $conf = new  ConfModel();
      if (request()->isPost()) {
        $data = input('post.');
        
        if ($data) {
          
          foreach ($data as $k => $v) {
            
            $conf->where('enname', $k)->update(['value' => $v]);
          }
          $this->success('配置信息修改成功', url('lst'));
        }
        
        
        return;
      }
      $confres = ConfModel::order('sort desc')->select();
      $this->assign('confres', $confres);
      $conf->where('type', '4')->update(['value' => '']);
      return view();
    }
    
  }