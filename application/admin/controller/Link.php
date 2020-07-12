<?php


namespace app\admin\controller;

use app\admin\model\Link as LinkModel;
use think\Loader;
use think\View;


class Link extends Common
{


    public function lst()
    {
        $link = new LinkModel();
        if (request()->isPost()){
            $sorts=input('post.');
            foreach ($sorts as $k => $v){
               $link->update(['id'=>$k,'sortn'=>$v]); 
            }
            $this->success('更新排序成功',url('lst'));
            return;
        }
        $linkres=$link->order('sortn desc')->paginate(3);
        $this->assign('linkres',$linkres);
        return view();
    }

   public function add(){
       if (request()->isPost()) {
           $data=input('post.');
              $validate = \think\Loader::validate('Link');
           if (!$validate->scene('add')->check($data)) {
               $this->error($validate ->getError());
           }
                $add =LinkModel::create($data);
           if ($add !== false) {
               $this->success('添加友情链接成功', url('lst'));
           } else {
               $this->error('添加友情链接失败');
           }
           return;
       }
        return view();
   }
   
   public function del(){
       if (LinkModel::destroy(input('id'))) {
           $this->success('删除友情链接成功', url('lst'));
       } else {
           $this->error('删除友情链接失败');
       }
   }

   
   public function edit(){
       $link = new  LinkModel();
       if (request()->isPost()) {
           $data=input('post.');
           $validate = \think\Loader::validate('Link');
           if (!$validate->scene('edit')->check($data)) {
               $this->error($validate ->getError());
           }
           
           $save =$link->update($data);
           if ($save!== false) {
               $this->success('修改友情链接成功', url('lst'));
           } else {
               $this->error('修改友情链接失败');
           }
           return;
       }
       $links = db('link')->find(input('id'));
       $this->assign('links',$links);
       return view();
   }


}