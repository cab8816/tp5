<?php
  
  
  namespace app\admin\controller;
  
  use \app\admin\model\Zpadmin as Zpadminmodel;
  
  class Zpadmin extends Common
  {
  
 
    protected $beforeActionList = [
      'delsonzp' => ['only' => 'del'],
    ];
 
    
    public function lst()
    {
      
      $zpadmin = new Zpadminmodel();
      $zpadminres = $zpadmin->mytree('guanx,paih asc');
      $this->assign('zpadminres', $zpadminres);
      return view();
      return view();
    }
    
    public function add()
    {
      
      $zpadmin = new  Zpadminmodel();
      if ($this->request->isPost()) {
        $data = input('post.');
        if ($data['guanx']==0 or$data['guanx']==1 or $data['guanx']==3 ){
            $data['xingb']=0;
        } else{
            $data['xingb']=1;
        }
          $data['name']= $data['xing'].$data['ming'];
        $zpadmin->data($data);
        
        $add = $zpadmin->save();
        if ($add) {
          $this->success('添加人员成功', url('lst'),null,1);
        } else {
          $this->error('添加人员失败');
        }
      }
        $zpadmins = $zpadmin->find(input('id'));
      $zpadminres = $zpadmin->mytree("guanx,paih");
        $this->assign(array(
            'zpadminres' => $zpadminres,
            'zpadmins' => $zpadmins,
        ));
      return view();
    }
    
    public function edit()
    {
      $zpadmin = new  Zpadminmodel();
      
      if (request()->isPost()) {
        
        $data = input('post.');
          $data['name']= $data['xing'].$data['ming'];
        $save = $zpadmin->update($data);
        if ($save !== false) {
          $this->success('修改族谱成员成功', url('lst'),null,1);
        } else {
          $this->error('族谱成员修改失败');
        }
        return;
      }
      $zpadmins = $zpadmin->find(input('id'));
      $zpadminres = $zpadmin->mytree('guanx,paih asc');
      $this->assign(array(
        'zpadminres' => $zpadminres,
        'zpadmins' => $zpadmins,
      ));
      return view();
    }
    
    public function del()
    {
      $zpadmin = new  Zpadminmodel();
        $del = db('zpadmin')->where('id',input('id'))->delete();
      if ($del) {
        $this->success('删除成功', url('lst'),null,1);
      } else {
        $this->error('删除失败', url('lst'));
        
      }
    }
    
    public function delsonzp()
    {
      $zpid = input('id');//要删除的当前栏目的id
   
      $zpadmin = new  Zpadminmodel();
      $sonids = $zpadmin->getchilrenid($zpid);
      $allcateid = $sonids;
      $allcateid[] = $zpid;
      if ($sonids) {
  
        db('zpadmin')->delete($sonids);
    }
    }

    public function databasebak(){

    }
    
  }