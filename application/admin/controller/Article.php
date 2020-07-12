<?php


namespace app\admin\controller;

use app\admin\model\Article as ArtcleModel;
use app\admin\model\Cate as CateModel;

class Article extends Common
{
    public function lst()
    {
        $artres=db('article')->field('a.*,b.catename')->alias('a')->join('bk_cate b','a.cateid = b.id')->order('id desc')->paginate(10);
        $this ->assign('artres',$artres);
        return view();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $data['time']=time();
            $validate = \think\Loader::validate('article');
            if (!$validate->scene('add')->check($data)) {
                $this->error($validate ->getError());
            }
            $article = new  ArtcleModel;
//            if ($_FILES['thumb']['tmp_name']) {
//                $file = request()->file('thumb');
//                $info = $file->validate(['size'=>102400000,'ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'uploads');
//                if ($info) {
//                    $thumb = ROOT_PATH . 'public' . DS . 'uploads'.'/'.$info->getSaveName();
//                    $data['thumb']=$thumb;
//
//                } 
//            }
            if ($article->save($data)) {
                $this->success('添加文章成功', url('lst'));
            } else {
                $this->error('添加文章失败', url('#'));
            }

            return;
        }
        $cate = new  CateModel();
        $cateres = $cate->catetree();
        $this->assign('cateres', $cateres);
        return view();
    }

    public function edit()
    {
        if (request()->isPost()) {

            $data = input('post.');
            $validate = \think\Loader::validate('article');
            if (!$validate->scene('add')->check($data)) {
                $this->error($validate ->getError());
            }
            $article = new  ArtcleModel;
            $save =$article->update($data);
            if ($save!== false) {
                $this->success('修改文章成功', url('lst'));
            } else {
                $this->error('修改文章失败');
            }
            return;
        }
        $cate = new  CateModel();
        $cateres = $cate->catetree();
        $arts = db('article')->find(input('id'));
        $this->assign(array('cateres'=>$cateres,
            'arts'=>$arts,
            ));
        return view();

    }
    
    public function del(){
        if (ArtcleModel::destroy(input('id'))) {
            $this->success('删除文章成功', url('lst'));
        } else {
            $this->error('删除文章失败');
        } 
    }


}