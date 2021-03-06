<?php


namespace app\admin\controller;


use think\Controller;
use think\Request;

class common  extends Controller
{
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        if (!session('id')||!session('name')){
            $this ->error('您尚未登录系统',url('login/index'));
        }
        $auth = new Auth();
        $request=Request::instance();
        $con=$request->controller();
        $action=$request->action();
        $name=$con.'/'.$action;
        $notcheck=array('Index/index','Admin/lst','Admin/logout');
        if (session('id')!=1) {
          if (!in_array($name,$notcheck)) {
//            if (!$auth->check($name, session('id'))) {
//              $this->error('没有权限', url('index/index'));
//            }
          }
        }
       $this->getNavCate();

    }
        public function getNavCate()
        {
        $cateres=db('cate')->where(array('pid'=>0))->select();
        foreach ($cateres  as $k => $v) {
            $children=db('cate')->where(array('pid'=>$v['id']))->select();
            if ($children){
                $cateres[$k]['children']=$children;
            } else{
                $cateres[$k]['children']=0;
            }
        }
        $this->assign('cateres',$cateres);

        }
}