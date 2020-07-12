<?php
  
  
  namespace app\admin\controller;
  
  use app\admin\model\Admin as Adminmodel;
  use app\admin\model\Cate as CateModel;
  use app\admin\model\Article as ArtcleModel;
  
  class Cate extends Common
  {
    protected $beforeActionList = [
      'delsoncate' => ['only' => 'del'],
    ];
    
    public function first()
    {
      echo 1111;
      die;
    }
    
    public function lst()
    {
      $cate = new CateModel();
      if (request()->isPost()) {
        $sorts = input('post.');
        foreach ($sorts as $k => $v) {
          $cate->update(['id' => $k, 'sort' => $v]);
        }
        $this->success('更新排序成功', url('lst'));
        return;
      }
      $cateres = $cate->catetree();
      $this->assign('cateres', $cateres);
      return view();
    }
    
    public function add()
    {
      
      $cate = new  CateModel();
      if ($this->request->isPost()) {
        $data = input('post.');
        $validate = \think\Loader::validate('cate');
        if (!$validate->scene('add')->check($data)) {
          $this->error($validate->getError());
        }
        $cate->data($data);
        
        $add = $cate->save();
        if ($add) {
          $this->success('添加成功', url('lst'));
        } else {
          $this->error('添加失败');
        }
      }
      
      $cateres = $cate->catetree();
      $this->assign('cateres', $cateres);
      return view();
    }
    
    public function edit()
    {
      $cate = new CateModel();
      
      if (request()->isPost()) {
        
        $data = input('post.');
        $validate = \think\Loader::validate('cate');
        if (!$validate->scene('add')->check($data)) {
          $this->error($validate->getError());
        }
        $save = $cate->update(input('post.'));
        if ($save !== false) {
          $this->success('修改栏目成功', url('lst'));
        } else {
          $this->error('栏目修改失败');
        }
        return;
      }
      $cates = $cate->find(input('id'));
      $cateres = $cate->catetree();
      $this->assign(array(
        'cateres' => $cateres,
        'cates' => $cates,
      ));
      return view();
    }
    
    public function del()
    {
      $del = db('cate')->delete(input('id'));
      if ($del) {
        $this->success('删除成功', url('lst'));
      } else {
        $this->error('删除失败', url('lst'));
        
      }
    }
    
    public function delsoncate()
    {
      $cateid = input('id');//要删除的当前栏目的id
      $cate = new  CateModel();
      $sonids = $cate->getchilrenid($cateid);
      $allcateid = $sonids;
      $allcateid[] = $cateid;
      $article = new ArtcleModel();
      foreach ($allcateid as $k => $v) {
        $article->where(array('cateid' => $v))->delete();
      }
      if ($sonids) {
      }
      db('cate')->delete($sonids);
      
    }
    
  }